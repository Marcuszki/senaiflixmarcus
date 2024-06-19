<?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        include '../conexao.php';

        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $ano_lancamento = $_POST['ano_lancamento'];
        $genero = $_POST['genero'];
        $classificacao = $_POST['classificacao'];
        $data_cadastro = date("Y-m-d H:i:s");
        $data_atualizacao = date("Y-m-d H:i:s");
        $status = 0;


        $diretorio_destino = "../uploads/";

        $nome_arquivo = uniqid() . '_' . basename($_FILES["foto"]["name"]);

        $caminho_arquivo = $diretorio_destino . $nome_arquivo;

        $extensoes_permitidas = array("jpg","jpeg","png");
        $extensao = strtolower(pathinfo($nome_arquivo, PATHINFO_EXTENSION));

        if(!in_array($extensao,$extensoes_permitidas)){
            echo"Somente arquivos JPG, JPEG e PNG são permitidos";
            exit();
        }

        if(move_uploaded_file($_FILES["foto"]["tmp_name"], $caminho_arquivo)){


            echo"O arquivo foi enviado com ssucesso.";
        }else{
            echo"Erro ao enviar o arquivo.";
        }

       
       

        $sql = "INSERT INTO filmes (titulo,foto,descricao,ano_lancamento,genero,classificacao,data_cadastro,data_atualizacao,status) VALUES ('$titulo','$nome_arquivo','$descricao','$ano_lancamento','$genero','$classificacao','$data_cadastro','$data_atualizacao','$status')";
        if($conn->query($sql)==true){
                echo"Cadastro realizado com sucesso !";
        }else{
                echo"Erro ao inserir registro".$conn->error;
        }
    }
    header('Location: ../index.php?pagina=filmes_listar');
?>