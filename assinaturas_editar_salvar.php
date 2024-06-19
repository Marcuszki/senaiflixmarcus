<?php
include '../conexao.php';

if(!isset($_GET['id'])){
    echo"Usuario invalido";
    exit();
}
$id = $_GET['id'];

if($_SERVER['REQUEST_METHOD']=='POST'){
    
    $plano = $_POST['plano'];
    $data_inicio = $_POST['data_inicio'];
    $data_fim = $_POST['data_fim'];
    $data_atualizacao = date("Y-m-d H:i:s");


    $q = "UPDATE assinaturas SET plano='$plano',data_inicio='$data_inicio',data_fim='$data_fim',data_atualizacao='$data_atualizacao' WHERE id='$id'";

if($conn->query($q)==TRUE){
        echo"Cadastro atualizado com sucesso";
}else{
    echo"Erro ao editar";
}

}



header('Location: ../index.php?pagina=assinaturas_listar');


?>