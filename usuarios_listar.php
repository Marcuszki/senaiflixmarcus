<?php
include 'conexao.php';

$sql = "SELECT * FROM usuarios ORDER BY nome ASC LIMIT 1000 ";

$resultado = $conn->query($sql);


?>

<table border="1" widht='50%' class="table">
    <thead class="table-dark">
        <tr>
            <th>id</th>   
            <th>Nome</th>
            <th>Usuario</th> 
            <th>Email</th>
            <th>Editar</th>
            <th>Remover</th>    
        </tr>
    </thead>
<a href="index.php?pagina=usuarios_cadastro" target = ""><span class="material-symbols-outlined">
add_box
</span> </a>

<?php

while($linha = $resultado->fetch_assoc()){
    echo"<tr>
        <td>".$linha['id']."</td>
        <td>".$linha['nome']."</td>
        <td>".$linha['usuario']."</td>
        <td>".$linha['email']."</td>
        <td><a href = 'index.php?pagina=usuarios_editar&id=".$linha['id']."'>Editar</td>
        <td><a href = 'index.php?pagina=usuarios_remover&id=".$linha['id']."'>Remover</a></td>
        </tr>
    
    ";
}
?>

</table>