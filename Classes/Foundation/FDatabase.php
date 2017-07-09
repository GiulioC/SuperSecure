<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class FDatabase extends mysqli {
    
    public function __construct(){
        global $config;
        parent::__construct('localhost','root','','superSecure');

        /* check DB connection */
        if ($this->connect_errno) {
            //error
        }
        else{
            //success
        }
    }
    
    public function Login($user, $pass){
        $query = "SELECT * FROM users WHERE username = '".mysql_real_escape_string($user)."' AND password = '".mysql_real_escape_string($pass)."' ";
        $result = $this->query($query);
        return mysqli_num_rows($result);
    }
    
    public function addUserToDB($user, $pass, $salt){        
        /*$name = $_POST['name']; 
        $surname = $_POST['surname']; 
        $user = $_POST['username']; 
        $email = $_POST['email']; 
        $pass1 = $_POST['password'];
        $pass2 = $_POST['password2'];*/
        
        $query = "INSERT INTO `users`(`username`, `password`, `salt`) VALUES ('".mysql_real_escape_string($user)."','".mysql_real_escape_string($pass)."', '".mysql_real_escape_string($salt)."')";
        $result = $this->query($query);
    }
    
    public function getUserSalt($username){
        $query = "SELECT `salt` FROM `users` WHERE username = '".$username."'";
        $result = $this->query($query);
        $row = mysqli_fetch_array($result, MYSQL_ASSOC);
        return $row['salt'];
    }
    
    //not needed anymore
    public function saveSessionID($username){
        $query = "UPDATE `users` SET `sID`='".mysql_real_escape_string($_SESSION['id'])."' WHERE `username` = '".$username."'";
        $result = $this->query($query);
        return $result;
    }
    
    public function checkSessID($username){
        $query = "SELECT `sID` FROM `users` WHERE username = '".$username."'";
        $result = $this->query($query);
        return $this->fetchResult($result);
    }
    
    //TODO CONSIDER 0 RESULTS CASE
    public function getUserFromSessID($sessID){
        $query = "SELECT `username` FROM `sessions` WHERE sID = '".$sessID."'";
        $result = $this->query($query);
        return $this->fetchResult($result);
    }
    
    public function getActiveSession($user){
        $query = "SELECT `sID` FROM `sessions` WHERE username = '".$user."'";
        $result = $this->query($query);
        return $this->fetchResult($result);
    }
    
    public function addToActiveSessions($user, $sess){
        $query = "INSERT INTO `sessions`(`username`, `sID`) values ('".mysql_real_escape_string($user)."', '".mysql_real_escape_string($sess)."')";
        $result = $this->query($query);
    }
    
    public function updateActiveSession($username, $sessionID){
        $query = "UPDATE `sessions` SET `sID`='".$sessionID."' WHERE `username` = '".$username."'";
        $result = $this->query($query);
        return $result;
    }
    
    public function deleteActiveSession($username){
        $query = "DELETE FROM `sessions` WHERE `username` = '".$username."'";
        $result = $this->query($query);
    }
    
    function fetchResult($queryResult){
	if ($queryResult != false) { //on query success
            if(mysqli_num_rows($queryResult) > 0) {// if there's at least one row result.
                while ($row = mysqli_fetch_array($queryResult, MYSQL_ASSOC)) {
                    $returnArray[] = $row; 
                }
            }
            else {// if the query returned an empty result
                $returnArray = array(); // creates an empty array and returns it.
            }
	}
	else {// on query failure
            $returnArray = false; 
	}
	return $returnArray;
    }
    
    function checkEmailOnDB($email){
        $query = "SELECT `email` FROM users WHERE email = '".mysql_real_escape_string($email)."'";
        $result = $this->query($query);
        return $this->fetchResult($result);
    }
}