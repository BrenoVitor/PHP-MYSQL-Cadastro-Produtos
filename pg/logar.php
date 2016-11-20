<?php
require_once('../includes/header.php');


$email = $_POST['email'];
$senha = $_POST['senha'];

if($usuario = login($conexao,$email,$senha)){
    if($usuario != null){
        logaUsuario($email);
        $_SESSION['success'] = "Logado com sucesso!";
        header('location: index.php');
    }else{
        $_SESSION['danger'] = "Usuário ou Senha Incorretos!";
         header('location: login.php');

    }

}else{
    $_SESSION['danger'] = "Usuário ou Senha Incorretos!";
    header('location: login.php');
}
die();
?>
