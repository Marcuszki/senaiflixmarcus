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
    $classificacao = $_POST['classificacao'];
    $data_atualizacao = date("Y-m-d H:i:s");

    

    $q = "SELECT * FROM filmes WHERE id='$id'";
    $resultado = $conn -> query($q);
    if($resultado->num_rows <= 0){
        echo"Usuario nao encontrado ";
        exit();
    }
    $linha = $resultado->fetch_assoc();
    //var_dump($linha);exit();


    $diretorio_destino = "../uploads/";

    unlink($diretorio_destino.$linha['foto']);


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

   


$q = "UPDATE filmes SET titulo='$titulo',foto='$nome_arquivo',descricao='$descricao',ano_lancamento='$ano_lancamento',genero='$genero',classificacao='$classificacao',data_atualizacao='$data_atualizacao' WHERE id='$id'";

if($conn->query($q)==TRUE){
     echo"Cadastro atualizado com sucesso";
}else{
    echo"Erro ao editar";
}

}



header('Location: ../index.php?pagina=filmes_listar');


?>