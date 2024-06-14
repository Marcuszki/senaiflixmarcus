<?php
include 'conexao.php';

$sql = "SELECT * FROM filmes ";

$resultado = $conn->query($sql);


?>

<table border="1" widht='50%'>
<tr>
 <th>id</th>   
 <th>Titulo do filme</th>
 <th>Descrição</th>
 <th>Genero</th> 
 <th>Classificação</th>
 <th>Editar</th>
 <th>Remover</th>   
</tr>

<?php
while($linha = $resultado->fetch_assoc()){
    echo"<tr>
        <td>".$linha['id']."</td>
        <td>".$linha['titulo']."</td>
        <td>".$linha['descricao']."</td>
        <td>".$linha['genero']."</td>
        <td>".$linha['classificacao']."</td>
        <td><a href = 'filmes_editar.php?id=".$linha['id']."'>Editar</td>
        <td><a href = 'filmes_remover.php?id=".$linha['id']."'>Remover</a></td>
        </tr>
    
    ";
}
?>

</table>