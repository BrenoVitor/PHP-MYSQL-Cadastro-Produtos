<?php
require_once('../includes/header.php');
verificaUsuario();

$nome = $_POST["nome"];
$id = $_POST["id"];
$preco = $_POST["preco"];
$categoria = $_POST["categoria_id"];

if(array_key_exists("usado",$_POST)){
    $usado = "true";
}else{
    $usado = "false";
}




if(alteraProduto($conexao, $nome, $preco,$categoria,$usado,$id)) {
?>
<p class="alert-success">Produto <?= $nome; ?>, <?= $preco; ?> alterado com sucesso!</p>
<?php
} else {
    $msg = mysqli_error($conexao);
?>
<p class="alert-danger">O produto <?php echo $nome; ?> não foi alterado: <?php echo $msg ?></p>
<?php
}
?>
<?php require_once('../includes/footer.php'); ?>
