<?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        include '../conexao.php';

        $plano = $_POST['plano'];
        $data_inicio = $_POST['data_inicio'];
        $data_fim = $_POST['data_fim'];
        $data_cadastro = date("Y-m-d H:i:s");
        $data_atualizacao = date("Y-m-d H:i:s");
        $status = 0;

        $sql = "INSERT INTO assinaturas(plano,data_inicio,data_fim,data_cadastro,data_atualizacao,status) VALUES ('$plano','$data_inicio','$data_fim','$data_cadastro','$data_atualizacao','$status')";
        if($conn->query($sql)==true){
                echo"Cadastro realizado com sucesso !";
        }else{
                echo"Erro ao inserir registro".$conn->error;
        }
    }

    header('Location: ../index.php?pagina=assinaturas_listar');

?>
