<?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        include '../conexao.php';

        $nome = $_POST['nome'];
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $data_cadastro = date("Y-m-d H:i:s");
        $data_atualizacao = date("Y-m-d H:i:s");
        $status = 0;

        $sql = "INSERT INTO usuarios(nome,usuario,senha,email,data_cadastro,data_atualizacao,status) VALUES ('$nome','$usuario','$senha','$email','$data_cadastro','$data_atualizacao','$status')";
        if($conn->query($sql)==true){
                echo"Cadastro realizado com sucesso !";
        }else{
                echo"Erro ao inserir registro".$conn->error;
        }
    }

    header('Location: ../index.php?pagina=usuarios_listar');
?>
