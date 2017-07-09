<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class CLogin {
    
    //TODO generate a different one each time
    const SALT1 = "xXx_thisIsASalt_xXx";
    const SALT2 = "LOL_thisWasASalt_420Blazeit";
    
    public function Login(){
        $user = $_POST['username'];
        $pass = $_POST['password'];
        if (isset($_POST['remember'])){
            $remember = true;
        }
        else {
            setcookie("remember", "", time()-3600, "/");
            $remember = false;
        }
        
        $FDatabase = USingleton::getInstance('FDatabase');
        
        $UPassword = USingleton::getInstance('UPassword');
        $salt = $FDatabase -> getUserSalt($user);
        $pass = $salt.$pass;
        $pass = $UPassword -> stretchPassword($pass, $salt);
        $pass = $UPassword -> generateHash($pass);
        
        $VLogin = USingleton::getInstance('VLogin');
        if ($FDatabase -> Login($user, $pass) == 1){ //login successful
            
            $sess = md5(self::SALT1.session_id().self::SALT2);
            
            $USession = USingleton::getInstance('USession');
            $USession -> login($user, $sess);
            
            //save session id into database
            if(!$FDatabase -> saveSessionID($user)){
                //error while executing the query
            }
            
            if ($remember){
                if (sizeof($FDatabase -> getActiveSession($user)) == 1){
                    //TODO consider failure
                    $FDatabase -> updateActiveSession($user, $sess);
                }
                else {
                    //TODO consider failure
                    $FDatabase -> addToActiveSessions($user, $sess);
                }
                setcookie("remember", $sess, time()+60*60, "/");
            }
            else {
                //TODO consider failure
                $FDatabase -> deleteActiveSession($user);
            }
            header("Location: PersonalPage");
        }
        else { //wrong username/password
            $VLogin -> showErrorPage();
        }
    }
    
    public function checkLoggedIn(){
        if (isset($_SESSION['username'])){
            return true;
        }
        elseif (isset($_COOKIE['remember'])) {            
            $FDatabase = USingleton::getInstance('FDatabase');
            $USession = USingleton::getInstance('USession');
            $user = $USession -> fetchActiveSession($_COOKIE['remember']);
            
            //TODO consider failure
            //correct way to do it ?
            $res = $FDatabase -> checkSessID($user);
            $oldSID = $res[0]['sID'];            
            if ($oldSID != $_COOKIE['remember']){
                //trying to hack session
                //trigger error
                //TODO put in error page
                echo "session hack lel";
                exit();
            }
            
            $sess = md5(self::SALT1.session_id().self::SALT2);
            $USession -> login($user, $sess);
            //TODO consider failure
            $FDatabase -> updateActiveSession($user, $sess);
            //TODO consider failure
            if(!$FDatabase -> saveSessionID($user)){
                //error while executing the query
            }
            setcookie("remember", $sess, time()+60*60, "/");
            return true;
        }
        else {
            return false;
        }
    }

}