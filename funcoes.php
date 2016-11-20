<?php
session_start();
define('PATH', dirname(__FILE__));
function somaArray($array){
$soma = 0;
    for($i = 0 ; $i < sizeof($array); $i++){

        $soma += $array[$i];


    }

    return $soma;

}

function logaUsuario($email) {
  $_SESSION["usuario_logado"] = $email;
}

function usuarioEstaLogado() {
    return isset($_SESSION["usuario_logado"]);
}

function usuarioLogado() {
    return $_SESSION["usuario_logado"];
}

function verificaUsuario() {
  if(!usuarioEstaLogado()) {
     $_SESSION["danger"] = "Você não tem acesso a esta funcionalidade.";
     header("Location: login.php");
     die();
  }
}

function logout(){

  session_destroy();
  session_start();
}

function mostraAlerta($tipo) {
    if(isset($_SESSION[$tipo])) {
?>
   <p class="alert-<?= $tipo ?>"><?= $_SESSION[$tipo]?></p>
<?php
       unset($_SESSION[$tipo]);
    }
}



function insereProduto($conexao, $nome, $preco,$id_categoria,$usado) {
    $nome = mysqli_real_escape_string($conexao, $nome);
    $preco = mysqli_real_escape_string($conexao, $preco);
    $id_categoria = mysqli_real_escape_string($conexao, $id_categoria);
    $usado = mysqli_real_escape_string($conexao, $usado);
    $query = "insert into produtos (nome, preco,id_categoria,usado) values ('{$nome}', ${preco},{$id_categoria},{$usado})";
    $resultadoDaInsercao = mysqli_query($conexao, $query);
    return $resultadoDaInsercao;
}

function alteraProduto($conexao, $nome, $preco,$id_categoria,$usado,$id) {
    $nome = mysqli_real_escape_string($conexao, $nome);
    $preco = mysqli_real_escape_string($conexao, $preco);
    $id_categoria = mysqli_real_escape_string($conexao, $id_categoria);
    $usado = mysqli_real_escape_string($conexao, $usado);
    $id = mysqli_real_escape_string($conexao, $id);
    $query = "update produtos set nome = '{$nome}', preco = {$preco} , id_categoria = '{$id_categoria}', usado = {$usado} where id = '{$id}' ;";
    $resultadoDaAlteracao = mysqli_query($conexao, $query);
    return $resultadoDaAlteracao;
}

function listaProdutos($conexao) {
    $query = "select p.*,c.nome as nome_categoria from produtos as p inner join categorias as c using(id_categoria)";
    $produtos = array();
    $resultadoDaBusca = mysqli_query($conexao, $query);
    while($produto = mysqli_fetch_assoc($resultadoDaBusca)){
        array_push($produtos,$produto);

    }


    return $produtos;


}

function Login($conexao,$email,$senha){
    $senha = md5($senha);
    $email = mysqli_real_escape_string($conexao, $email);
    $query = "select * from usuarios where email='{$email}' and senha='{$senha}';";
    $resultadoDaBusca = mysqli_query($conexao,$query);
    $usuario = mysqli_fetch_assoc($resultadoDaBusca);

    return $usuario;

}


function SelecionaProduto($conexao,$id) {
     $id = mysqli_real_escape_string($conexao, $id);
    $query = "select * from produtos where id = {$id}";
    $resultadoDaBusca = mysqli_query($conexao, $query);
    $produto = mysqli_fetch_assoc($resultadoDaBusca);

        return $produto;
}

function listaCategorias($conexao){
    $query = "select * from categorias";
    $categorias = array();
    $resultadoDaBusca = mysqli_query($conexao, $query);
    while($categoria = mysqli_fetch_assoc($resultadoDaBusca)){
        array_push($categorias,$categoria);

    }


    return $categorias;


}

function removeProduto($conexao, $id) {
   $id = mysqli_real_escape_string($conexao, $id);
    $query = "delete from produtos where id = '{$id}'";
    $resultadoDoDelete = mysqli_query($conexao, $query);
    return $resultadoDoDelete;
}


?>
