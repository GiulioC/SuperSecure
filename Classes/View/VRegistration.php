<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class VRegistration extends View {
    
    public function showForm(){
        $this -> display('registration.tpl');
    }
    
    public function showEmailConfirmation(){
        //TODO implement
    }
    
}