<?php
include '../conexao.php';

if(!isset($_GET['id'])){
    echo"Usuario invalido";
    exit();
}
$id = $_GET['id'];

if($_SERVER['REQUEST_METHOD']=='POST'){
    
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $cep = $_POST['cep'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $data_atualizacao = date("Y-m-d H:i:s");


$q = "UPDATE clientes SET nome='$nome',cpf='$cpf',endereco='$endereco',bairro='$bairro',cidade='$cidade',estado='$estado',cep='$cep',email='$email',telefone='$telefone',data_atualizacao='$data_atualizacao' WHERE id='$id'";

if($conn->query($q)==TRUE){
        echo"Cadastro atualizado com sucesso";
}else{
    echo"Erro ao editar";
}

}



header('Location: ../index.php?pagina=clientes_listar');


?>