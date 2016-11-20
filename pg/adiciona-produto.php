<?php
require_once('../includes/header.php');

verificaUsuario();


$nome = $_POST["nome"];
$preco = $_POST["preco"];
$categoria = $_POST["categoria_id"];

if(array_key_exists("usado",$_POST)){
    $usado = "true";
}else{
   $usado = "false";
}




if(insereProduto($conexao, $nome, $preco,$categoria,$usado)) {
?>
<p class="alert-success">Produto <?= $nome; ?>, <?= $preco; ?> adicionado com sucesso!</p>
<?php
} else {
    $msg = mysqli_error($conexao);
?>
<p class="alert-danger">O produto <?php echo $nome; ?> não foi adicionado: <?php echo $msg ?></p>
<?php
}
?>
<?php require_once('../includes/footer.php'); ?>
