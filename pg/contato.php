<?php require_once('../includes/header.php'); ?>
<div class="formulario">
    <form action="envia-email.php" method="post">


                <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                    <div class="form-group">
                        <label>Nome: </label>
                        <input type="text" class="form-control" required name="nome" />
                    </div>
                </div>


                <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                    <div class="form-group">

                        <label>E-mail:</label>
                         <input type="email" name="email" required class="form-control"/>


                        </div>
                    </div>

              <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                    <div class="form-group">

                        <label>Assunto:</label>

                         <input type="text" name="assunto" required class="form-control"/>



                        </div>
                    </div>


              <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                    <div class="form-group">
                        <label>Conteúdo:</label>
                        <textarea name="conteudo"  class="form-control" ></textarea>
                  </div>
            </div>

            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                <div class="form-group">

                    <input type="submit" class="form-control btn btn-primary" value="Enviar" />
                 </div>
            </div>

            <div class="clear"></div>
</form>


<?php require_once('../includes/footer.php'); ?>
