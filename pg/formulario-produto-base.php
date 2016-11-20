<input type="hidden" class="form-control" value="<?php echo $produto['id'];?>" name="id" />
            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                <div class="form-group">
                    <label>Nome: </label>
                    <input type="text" class="form-control" value="<?php echo $produto['nome'];?>" name="nome" />
                </div>
            </div>


            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                <div class="form-group">

                    <label>Preço:</label> <input type="number" value="<?php echo $produto['preco'];?>" name="preco" class="form-control"/>


                    </div>
                </div>

          <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                <div class="form-group">

                    <label>Categorias:</label>


                     <?php foreach($categorias as $categoria){ ?>
                    <?php $essaEhaCategoria = $produto['id_categoria'] == $categoria['id_categoria'];
                          $selecao = $essaEhaCategoria ? "checked='true'" : ""; ?>
                    <input type="radio" id="categoria_id" <?php echo $selecao; ?>  value="<?php echo $categoria['id_categoria']; ?>" name="categoria_id">
                        <?php echo $categoria['nome'];?>



                    <?php } ?>



                    </div>
                </div>


          <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                <div class="form-group">
                    <input type="checkbox" <?php echo $usado; ?> value = "true" id="usado" name="usado">&nbsp;Usado
              </div>
        </div>
