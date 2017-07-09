<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function myAutoload($class_name) {
    switch ($class_name[0]) {
        case 'V':
            require_once ('Classes/View/'.$class_name.'.php');
            break;
        case 'F':
            require_once ('Classes/Foundation/'.$class_name.'.php');
            break;
        case 'E':
            require_once ('Classes/Entity/'.$class_name.'.php');
            break;
        case 'C':
            require_once ('Classes/Controller/'.$class_name.'.php');
            break;
        case 'U':
            require_once ('Classes/Utility/'.$class_name.'.php');
            break;
        case 'S':
            require_once ('lib/smarty/Smarty.class.php'); 
            break;
    }
}

spl_autoload_register('myAutoload');

