<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once('../conexao.php');
require_once('../funcoes.php');



?>

<html>
<head>
    <title>Minha loja</title>
    <meta charset="utf-8">
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <link href="../css/loja.css" rel="stylesheet" />
    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/npm.js"></script>

</head>

<body>
        <header>
            <nav class="navbar navbar-inverse navbar-fixed-top">
                 <div class="container-fluid">
                     <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                          </button>
                          <a class="navbar-brand" href="../index.php">Minha Loja</a>
                    </div>

                     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                          <ul class="nav navbar-nav">
                            <li class="active"><a href="../pg/produto-formulario.php">Adicionar Produtos</a></li>
                            <li class="#"><a href="../pg/lista-produtos.php">Listar Produtos</a></li>
                              <li class="#"><a href="../pg/contato.php">Contato</a></li>

                         </ul>
                         <ul class="nav navbar-nav navbar-right">
                         <!-- <div align="right" style="float:right;">
                           </div> -->
                        <?php if(usuarioEstaLogado()){ ?>
                        <li class="dropdown open" role="presentation">
                             <a class="navbar-brand" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button"><?php echo usuarioEstaLogado() ? usuarioLogado() : "Login"; ?>
  <span class="caret"></span>
                             </a>



                              <ul class="dropdown-menu inverse">
                  <li><a href="#">Perfil</a></li>

                  <li role="separator" class="divider"></li>
                  <li><a href="../pg/logout.php">Logout</a></li>
                </ul>
                           </li>
                           <?php }else{ ?>
                             <a class="navbar-brand" href="../pg/login.php">Login</a>
                             <?php } ?>
                       </ul>


                     </div>





                </div>




            </nav>

        </header>
     <main>
    <div class="container">

        <div class="principal">

          <?php mostraAlerta("success");
          mostraAlerta("danger"); ?>
