<?php

class UValidator {
    
    public function validateRegistration($name, $surname, $email, $pass1, $pass2){
        
        $error = '';
        
        if ($name == "" || $surname == "" || $email == "" || $pass1 == "" || $pass2 == ""){
            $error = "Please fill in all the fields";
        }
        else {
            $FDatabase = USingleton::getInstance('FDatabase');
            if (!$FDatabase -> checkEmailOnDB($email)){
                $result = validateForm(); //returns false if form is valid
                if (!result){
                    //TODO add user to DB
                }
                else {
                    //TODO print error message
                }
            }
            else {
                //TODO error: email already in use
            }
        }
    }
    
    public function validateRegistrationForm(){
        //TODO create config file
        global $config;
	$name = $surname = $email = $pass1 = $pass2 = "";
	$nameErr = $surnameErr = $emailErr = $pass1Err = $pass2Err = $finalError = "";
        $UGeneral = USingleton::getInstance('UGeneral');

	if (!isset($_POST["name"])) {
            $nameErr = "Name is required";
        }
        else {
            $name = $UGeneral -> sanitizeString($_POST["name"]);
            $name = ucfirst($name);
            if (strlen($name) > $config['mysql']['maxFieldLength']) {
                $nameErr = "Name exceeded max length (".$config['mysql']['maxFieldLength'].")";
            }
            elseif (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                $nameErr = "Only letters and white space allowed"; 
            }
            else {
                //name is correct do nothing
            }
  	}
  	if ($nameErr != ""){
            $finalError .= "Name: ".$nameErr.'<br>';
  	}

  	if (!isset($_POST["surname"])) {
            $surnameErr = "Surname is required";
        }
        else {
            $surname = $UGeneral ->sanitizeString($_POST["surname"]);
            $surname = ucfirst($surname);
            if (strlen($surname) > $config['mysql']['maxFieldLength']) {
                $surnameErr = "Surname exceeded max length (".$config['mysql']['maxFieldLength'].")";
            }
            elseif (!preg_match("/^[a-zA-Z ]*$/",$surname)) {
                $surnameErr = "Only letters and white space allowed"; 
            }
            else {
                //surname is correct do nothing
            }
  	}
  	if ($surnameErr != ""){
            $finalError .= "Surname: ".$surnameErr.'<br>';
  	}

   	if (!isset($_POST["email"])) {
            $emailErr = "Email is required";
        }
        else {
            $email = $UGeneral ->sanitizeString($_POST["email"]);
            $email = ucfirst($email);
            if (strlen($email) > $config['mysql']['maxFieldLength']) {
                $emailErr = "Email exceeded max length (".$config['mysql']['maxFieldLength'].")";
            }
            elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format"; 
            }
            else {
                //email is correct do nothing
            }
  	}
  	if ($emailErr != ""){
            $finalError .= "Email: ".$emailErr.'<br>';
  	}

   	if (!isset($_POST["password1"])) {
            $pass1Err = "Password is required";
        }
        else {
            $pass1 = $UGeneral ->sanitizeString($_POST["password1"]);
            if (strlen($pass1) > $config['mysql']['maxFieldLength']) {
                $pass1Err = "Password exceeded max length (".$config['mysql']['maxFieldLength'].")";
            }
            elseif (strlen($pass1) < 5) {
                $pass1Err = "Password is too short"; 
            }
            else {
                //password is correct do nothing
            }
  	}
  	if ($pass1Err != ""){
  		$finalError .= "Password: ".$pass1Err.'<br>';
  	}

   	if (!isset($_POST["password2"])) {
            $pass2Err = "You must confirm your password";
        }
        else {
            $pass2 = $UGeneral ->sanitizeString($_POST["password2"]);
            if ($pass2 != $pass1){
                    $pass2Err = "Passwords do not match";
            }
            else {
                //password is correct do nothing
            }
  	}
  	if ($pass2Err != ""){
            $finalError .= "Password: ".$pass2Err.'<br>';
  	}

  	if ($finalError != ""){
            return $finalError;
  	}
  	else {
            return false;
  	}
    }
    
}

