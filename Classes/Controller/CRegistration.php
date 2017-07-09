<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class CRegistration {
    
    public function showRegPage(){
        $VRegistration = USingleton::getInstance('VRegistration');
        $VRegistration -> showForm();
    }
    
    public function showEmailConfirmationPage(){
        $VRegistration = USingleton::getInstance('VRegistration');
        $VRegistration -> showEmailConfirmation();
    }
    
    //TODO la pagina registration deve chiamare questa funzione
    public function processRegistrationData(){
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];
        
        $UValidator = USingleton::getInstance('UValidator');
        
        $errorMessage = $UValidator -> validateRegistration($name, $surname, $email, $password1, $password2);
        
        $error = '';
        if ($name == "" || $surname == "" || $email == "" || $pass1 == "" || $pass2 == ""){
            $error = "Please fill in all the fields";
        }
        else {
            $FDatabase = USingleton::getInstance('FDatabase');
            if (!$FDatabase -> checkEmailOnDB($email)){
                $result = validateForm(); //returns false if form is valid
                if (!result){
                    //TODO add user to DB with no confirmation
                    //TODO send confirmation email
                    //TODO redirect to email confirmation page
                }
                else {
                    //TODO print error message
                    $error = $result;
                }
            }
            else {
                $error = "Email already in use";
            }
        }
        
        if ($error){
            //TODO print error and stop registration process
        }
    }
    
    public function addUser(){
        $FDatabase = USingleton::getInstance('FDatabase');
        
        $user = $_POST['username'];
        $pass = $_POST['password'];
        
        $UPassword = USingleton::getInstance('UPassword');
        
        $bytes = $UPassword -> generateRandomSalt();
        $pass = $bytes.$pass;
        $pass = $UPassword -> stretchPassword($pass, $bytes);
        $pass = $UPassword -> generateHash($pass);
        
        $FDatabase -> addUserToDB($user, $pass, $bytes);
        header("location: index.php");
    }
    
}