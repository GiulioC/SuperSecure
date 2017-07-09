<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class VLogin extends View {
    
    public function showLoginPage(){
        $this->display('login.tpl');
    }
    
    public function showPersonalPage(){
        $this->assign('username', $_SESSION['username']);
        $this->display('personalPage.tpl'); 
    }
    
    public function showErrorPage(){
        $this->display('login_error.tpl');
    }
    
    //TODO mettere nel posto giusto
    public function showHome($array){
        $this->assign('allItems', $array);
        //TODO bisogna controllare se l'utente è loggato
        $this->assign('loggedIn',false);
        $this->display('index.tpl');
    }
    
    
    
}