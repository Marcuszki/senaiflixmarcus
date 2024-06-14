<?php
include '../conexao.php';

if(!isset($_GET['id'])){
    echo"Usuario invalido";
    exit();
}
$id = $_GET['id'];

if($_SERVER['REQUEST_METHOD']=='POST'){
    
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $ano_lancamento = $_POST['ano_lancamento'];
    $genero = $_POST['genero'];
    $clasificacao = $_POST['clasificacao'];
    $data_atualizacao = date("Y-m-d H:i:s");
   


$q = "UPDATE filmes SET titulo='$titulo',descricao='$descricao',ano_lancamento='$ano_lancamento',genero='$genero',clasificacao='$clasificacao','data_atualizacao='$data_atualizacao' WHERE id='$id'";

if($conn->query($q)==TRUE){
     echo"Cadastro atualizado com sucesso";
}else{
    echo"Erro ao editar";
}

}



header('Location: index.php?pagina=filmes_listar');


?>