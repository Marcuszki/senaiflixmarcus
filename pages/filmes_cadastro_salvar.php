<?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        include '../conexao.php';

        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $ano_lancamento = $_POST['ano_lancamento'];
        $genero = $_POST['genero'];
        $clasificacao = $_POST['clasificacao'];
        $data_cadastro = date("Y-m-d H:i:s");
        $data_atualizacao = date("Y-m-d H:i:s");
        $status = 0;

        $sql = "INSERT INTO filmes (titulo,descricao,ano_lancamento,genero,clasificacao,data_cadastro,data_atualizacao,status) VALUES ('$titulo','$descricao','$ano_lancamento','$genero','$clasificacao','$data_cadastro','$data_atualizacao','$status')";
        if($conn->query($sql)==true){
                echo"Cadastro realizado com sucesso !";
        }else{
                echo"Erro ao inserir registro".$conn->error;
        }
    }
?>