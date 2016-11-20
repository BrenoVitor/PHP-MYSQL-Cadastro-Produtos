<?php
require_once('../includes/header.php');
verificaUsuario();


?>

<?php
if(usuarioEstaLogado()) {
?>
<p class="text-success">Você está logado como <?= usuarioLogado(); ?></p>
<div class="row">
  <div align="center">
      <a href="logout.php" class="btn btn-warning">Logout</a>
  </div>
</div>
<?php
}
?>

<h1>Bem Vindo!</h1>

<?php require_once('../includes/footer.php'); ?>
