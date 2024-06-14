<?php
include '../conexao.php';

$id = $_GET['id'];
$sql = "DELETE FROM filmes WHERE id='$id'";
$resultado = $conn -> query($sql);


header('Location: filmes_listar.php');


?>