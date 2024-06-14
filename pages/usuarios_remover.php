<?php
include '../conexao.php';

$id = $_GET['id'];
$sql = "DELETE FROM usuarios WHERE id='$id'";
$resultado = $conn -> query($sql);


header('Location: usuarios_listar.php');


?>