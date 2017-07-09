<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class Usession {
    
    public function startSession(){
        session_start();
        if (sizeof($_SESSION) == 0){
            //new session
            session_regenerate_id();
        }
        else {
            $_SESSION['time'] = time();
        }
        ini_set("session.use_only_cookies", 1);
        
        if (isset($_SESSION['username'])){
            //do user/login related checks
            if ($_SESSION['time'] && !$this->checkTime()){
		session_unset();
                session_destroy();
		//session is expired
            }
            if (!$this->CheckSessionID()){
                //TODO show generic error page
                echo 'session error !';
                exit();
            } 
            if (!$this->checkSessionValidity()){
                //trigger an error
            }
        }
        else {
            //only do general checks
            if (!empty($_SERVER["HTTP_REFERER"])) {
                //$url = parse_url($_SERVER[‘HTTP_REFERER’]);
                if (parse_url($_SERVER["HTTP_REFERER"])["host"] != "localhost") {
                    /* invalidate the session */
                }
            }
        }
    }
    
    function checkSessionValidity(){
	//prevents session hijacking
        $addr = $_SERVER['REMOTE_ADDR'];
	if ($addr != $_SESSION['ip']){
            return false;
	}
	//prevents session fixation
        $id = session_ID();
	if ($id != $_SESSION['id']){
            return false;
	}
        return true;
    }
    
    function login($user, $md5sess) {
        $_SESSION['username'] = $user;
        $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
        $_SESSION['id'] = $md5sess;
        $_SESSION['time'] = time();
    }
    
    function logout(){
        setcookie("remember", "", time()-3600, "/");
        session_unset();
        session_destroy();
    }
    
    //returns true if session has not expired, false otherwise
    function checkTime(){
        global $config;
        //if(time() - $_SESSION['time'] > $config['session']['duration']){
        if(time() - $_SESSION['time'] > 60*60){ //1 hour
                return false;
        }
        else {
                return true;
        }
    }
    
    function checkSessionID(){
        $FDatabase = USingleton::getInstance('FDatabase');
        $res = $FDatabase -> checkSessID($_SESSION['username']);
        $sID = $res[0]['sID'];
        if ($sID != $_SESSION['id']){
            //echo "sID: ".$sID."<br>";
            //echo "session id: ".$_SESSION['id']."<br>";
            return false;
        }
        return true;
    }
    
    public function fetchActiveSession($sessID){
        $FDatabase = USingleton::getInstance('FDatabase');
        $user = $FDatabase -> getUserFromSessID($sessID);
        return $user[0]['username'];
    }
}