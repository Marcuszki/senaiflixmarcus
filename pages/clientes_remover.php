<?php
include 'conexao.php';

$id = $_GET['id'];
$sql = "DELETE FROM clientes WHERE id='$id'";
$resultado = $conn -> query($sql);


header('Location: index.php?pagina=clientes_listar');


?>