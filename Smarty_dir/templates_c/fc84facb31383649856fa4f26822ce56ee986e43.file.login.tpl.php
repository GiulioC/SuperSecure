<?php /* Smarty version Smarty-3.1.18, created on 2017-07-09 18:45:51
         compiled from "Smarty_dir\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2746359625dbfacaff4-37388012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc84facb31383649856fa4f26822ce56ee986e43' => 
    array (
      0 => 'Smarty_dir\\templates\\login.tpl',
      1 => 1499618520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2746359625dbfacaff4-37388012',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59625dbfaf0ec1_15318645',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59625dbfaf0ec1_15318645')) {function content_59625dbfaf0ec1_15318645($_smarty_tpl) {?><!DOCTYPE html>
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
        <h1>Login</h1>
        <form method="POST" action="index.php?c=login">
            user <input type="text" name="username" placeholder="username"> <br>
            password <input type="password" name="password" placeholder="username"> <br>
            remember me <input type="checkbox" name="remember"> <br>
            <input type="submit" value="send">
            <input type="reset" value="reset">
        </form>
    </body>
</html><?php }} ?>
