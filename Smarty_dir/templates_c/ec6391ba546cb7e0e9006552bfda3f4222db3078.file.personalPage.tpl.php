<?php /* Smarty version Smarty-3.1.18, created on 2017-07-09 18:45:55
         compiled from "Smarty_dir\templates\personalPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3262859625dc3d3e7b9-10981853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec6391ba546cb7e0e9006552bfda3f4222db3078' => 
    array (
      0 => 'Smarty_dir\\templates\\personalPage.tpl',
      1 => 1499618520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3262859625dc3d3e7b9-10981853',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59625dc3d64a22_56722667',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59625dc3d64a22_56722667')) {function content_59625dc3d64a22_56722667($_smarty_tpl) {?><!DOCTYPE html>
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
        <h1>Hello <?php echo ucfirst($_smarty_tpl->tpl_vars['username']->value);?>
 !</h1>
        <a href="index.php">Home</a> <br>
    </body>
</html>
<?php }} ?>
