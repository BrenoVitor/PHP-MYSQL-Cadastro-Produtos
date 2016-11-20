<?php
require_once('../includes/header.php');


verificaUsuario();





if($produtos = listaProdutos($conexao)){

   foreach($produtos as $produto){

?>

<article>


        <div class="col-md-3 col-lg-3 col-xs-12 col-sm-12 produtos">
            <figure>
             <img src="../img/0fa3f36182d0bc4db20451349b99a4f7.jpg" class="img-responsive">
                <figcaption>
                <?php echo $produto['nome']; ?>
                </figcaption>
            </figure>
            <p>R$<?php echo $produto['preco'];?></p>
            <p><?php echo $produto['nome_categoria'];?></p>
            <p><?php if($produto['usado']){
                        echo 'Usado';

                    }else{
                    echo 'Novo';

                    } ?>

            </p>

            <form action="remove-produto.php" class="form-excluir" method="post">
                    <input type="hidden" name="id" value="<?=$produto['id']?>" />
                    <button class="btn btn-danger botao-excluir"><i class="fa fa-trash-o"></i>Excluir</button>
            </form>

            <form action="produto-altera-formulario.php" class="form-editar" method="post">
                    <input type="hidden" name="id" value="<?=$produto['id']?>" />
                    <button  class="btn btn-info botao-alterar">Alterar</button>
            </form>
        </div>


</article>

<?php

    }


}else{

    $msg = mysqli_error();
}





?>


<?php require_once('../includes/footer.php');?>
