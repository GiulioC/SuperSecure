<?php /* Smarty version Smarty-3.1.18, created on 2017-07-09 18:57:13
         compiled from "Smarty_dir\templates\registration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111659626069f04155-46505348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c1639736e4e7fe97931c99dff12abb2831f83cb' => 
    array (
      0 => 'Smarty_dir\\templates\\registration.tpl',
      1 => 1499618520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111659626069f04155-46505348',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59626069f26d61_55111601',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59626069f26d61_55111601')) {function content_59626069f26d61_55111601($_smarty_tpl) {?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>TITLE</title>
    </head>
    <body>
        <h1>Sign up</h1>
        
        <form method="POST" action="index.php?c=signup">
            <!--name <input type="text" name="name" placeholder="name"> <br>
            surname <input type="text" name="surname" placeholder="surname"> <br>-->
            username <input type="text" name="username" placeholder="username"> <br>
            <!--email <input type="text" name="email" placeholder="email"> <br>-->
            password <input type="password" name="password" placeholder="password"> <br>
            <!--repeat password <input type="password" name="password2" placeholder="password"> <br>
            remember me <input type="checkbox" name="remember"> <br>-->
            <input type="submit" value="send">
            <input type="reset" value="reset">
        </form>
        
    </body>
</html><?php }} ?>
