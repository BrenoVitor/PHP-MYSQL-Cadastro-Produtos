<?php
require_once('../funcoes.php');
logout();
$_SESSION['success'] = "Logout realizado com sucesso!";
header('location:login.php');
die();
?>
