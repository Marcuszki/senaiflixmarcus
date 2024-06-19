<?php
include '../conexao.php';

$id = $_GET['id'];  

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



    echo $diretorio_destino.$linha['foto'];
$sql = "DELETE FROM filmes WHERE id='$id'";
$resultado = $conn -> query($sql);




header('Location: ../index.php?pagina=filmes_listar');


?>