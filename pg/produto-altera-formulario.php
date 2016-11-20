<?php
require_once('../includes/header.php');

verificaUsuario();



if(array_key_exists('id',$_POST)){
    $id = $_POST['id'];




if($categorias = listaCategorias($conexao)){

    if($produto = SelecionaProduto($conexao,$id)){
     $usado = $produto['usado'] ? "checked='checked'" : "";



?>
<div class="formulario">
    <form action="altera-produto.php" method="post">

         <?php require_once('formulario-produto-base.php'); ?>



            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                <div class="form-group">
                    <input type="submit" class="form-control btn btn-primary" value="Alterar" />
                 </div>
            </div>
     </form>
    <div class="clear"></div>
    </div>

<?php       }else{


            header('location:lista-produtos.php');
            }

        }else{
            header('location:lista-produtos.php');
        }
     }else{
            header('location:lista-produtos.php');
        }

 ?>
<?php require_once('../includes/footer.php'); ?>
