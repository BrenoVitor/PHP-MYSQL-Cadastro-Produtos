<?php

require_once('../includes/header.php');

verificaUsuario();

$produto = array("nome" => "", "descricao" => "", "preco" => "", "categoria_id" => "1");
$usado = "";

if($categorias = listaCategorias($conexao)){




?>
<div class="formulario">
    <form action="adiciona-produto.php" method="post">



            <?php require_once('formulario-produto-base.php'); ?>


            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                <div class="form-group">
                    <input type="submit" class="form-control btn btn-primary" value="Cadastrar" />
                 </div>
            </div>
     </form>
    <div class="clear"></div>
    </div>

<?php }else{


    header('location:lista-produtos.php');
    }
 ?>
<?php require_once('../includes/footer.php'); ?>
