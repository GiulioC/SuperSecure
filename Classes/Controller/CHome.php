<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class CHome {
    
    public function start(){
        $USession = USingleton::getInstance('USession');
        $USession -> startSession();
        
        $CLogin = USingleton::getInstance('CLogin');
        if($CLogin->checkLoggedIn()){
            echo 'logged in as '.$_SESSION['username'].'<br>';
        }
        $this->dumpRequestArrays();
        if (isset($_GET['c'])){
            $this->switchAction();
        }
        else {
            $VHome = USingleton::getInstance('VHome');
            $VHome -> showHomePage();
        };
        
        var_dump($_SESSION);
    }
    
    private function switchAction(){
        //$action = filter_input(INPUT_GET, 'c', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
        $action = $_GET['c'];        
        switch ($action):
            
            case 'homePage':
                $VHome = USingleton::getInstance('VHome');
                $VHome -> showHomePage();
                break;
            
            case 'login':
                if (isset($_POST['username'])){
                    $CLogin = USingleton::getInstance('CLogin');
                    $CLogin->login();
                }
                else {
                    $VLogin = USingleton::getInstance('VLogin');
                    $VLogin -> showLoginPage();
                }
                break;
                
            case 'logout':
                if (isset($_SESSION["username"])){
                    $FDatabase = USingleton::getInstance('FDatabase');
                    //TODO consider failure
                    $FDatabase -> deleteActiveSession($_SESSION["username"]);
                    
                }
                $USession = USingleton::getInstance('USession');
                $USession -> logout();
                header("Location: index.php");
                break;
                
            case 'myPage':
                if (isset($_SESSION['username'])){
                    $VLogin = USingleton::getInstance('VLogin');
                    $VLogin -> showPersonalPage();
                }
                else {
                    //TODO put message in error page
                    echo 'Error - you\'re not logged in !<br>';
                }
                break;
                
            case 'signup':
                $CRegistration = USingleton::getInstance('CRegistration');
                if (isset($_POST['username'])){
                    $CRegistration -> addUser();
                }
                else {
                    $CRegistration -> ShowRegPage();
                }
                break;

            default:
                $VHome = USingleton::getInstance('VHome');
                $VHome -> showHomePage();
        endswitch;
    }
    
    function dumpRequestArrays(){
        if (sizeof($_GET) > 0){
            echo 'GET: ';
            foreach ($_GET as $key => $value){
                echo $key.' => '.$value.', ';
            }
            echo '<br>';
        }
        if (sizeof($_POST) > 0){
            echo 'POST: ';
            foreach ($_POST as $key => $value){
                echo $key.' => '.$value.', ';
            }
            echo '<br>';
        }
    }

}