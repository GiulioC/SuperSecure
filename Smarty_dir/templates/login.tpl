<!DOCTYPE html>
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
</html>