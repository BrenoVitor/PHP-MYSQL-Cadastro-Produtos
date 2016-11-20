<?php require_once('../includes/header.php');


?>
<?php
if(usuarioEstaLogado()){
    header('Location:index.php');
}
?>

<div class="formulario">
    <form action="logar.php" method="post">


        <div class="row">
            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                <div class="form-group">
                    <label>E-mail: </label>
                    <input type="email" class="form-control" name="email" />
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                <div class="form-group">

                    <label>Senha:</label>
                    <input type="password"  name="senha" class="form-control"/>


                    </div>
                </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                <div class="form-group">
                    <input type="submit" class="form-control btn btn-success" value ="Login" id="login" name="login">
              </div>
        </div>

        <div class="clear"></div>
    </form>
</div>

<?php require_once('../includes/footer.php'); ?>
