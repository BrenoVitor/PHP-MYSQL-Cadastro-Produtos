<?php

require_once('../includes/header.php');

verificaUsuario();

$id = $_GET['id'];

if($resultado = removeProduto($conexao,$id)){
    $_SESSION['success'] = "O produto foi removido com sucesso!";
    header('location:lista-produtos.php');

?>



<?php }else{
    $_SESSION['danger'] = "O produto não foi removido!";
    header('location:lista-produtos.php');
} ?>
<?php require_once('../includes/footer.php');?>
