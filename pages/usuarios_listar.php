<?php
include 'conexao.php';

$sql = "SELECT * FROM usuarios ORDER BY nome ASC LIMIT 1000 ";

$resultado = $conn->query($sql);


?>

<table border="1" widht='50%'>
<tr>
 <th>id</th>   
 <th>Nome</th>
 <th>Usuario</th> 
 <th>Email</th>
 <th>Editar</th>
 <th>Remover</th>    
</tr>

<?php
while($linha = $resultado->fetch_assoc()){
    echo"<tr>
        <td>".$linha['id']."</td>
        <td>".$linha['nome']."</td>
        <td>".$linha['usuario']."</td>
        <td>".$linha['email']."</td>
        <td><a href = 'usuarios_editar.php?id=".$linha['id']."'>Editar</td>
        <td><a href = 'usuarios_remover.php?id=".$linha['id']."'>Remover</a></td>
        </tr>
    
    ";
}
?>

</table>