<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class View extends Smarty {
    
    public function __construct(){
        parent::__construct();
        
        $this -> template_dir = 'Smarty_dir/templates';
        $this -> compile_dir = 'Smarty_dir/templates_c';
        $this -> config_dir = 'Smarty_dir/cache';
        $this -> cache_dir = 'Smarty_dir/configs';
        $this -> caching = false;
    }
    
    
    
    
}

