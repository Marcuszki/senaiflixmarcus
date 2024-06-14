
<?php

include '../conexao.php';

$id = $_GET['id'];
$q = "SELECT * FROM usuarios WHERE id='$id'";
$resultado = $conn -> query($q);
if($resultado->num_rows <= 0){
    echo"Usuario nao encontrado ";
    exit();
}
$linha = $resultado->fetch_assoc();

?>

<html>
    <head></head>
    <body>
        <form  method="POST" action="usuarios_cadastro_salvar.php?id=<?php echo $id?>">
            <h1>Realizar Cadastro</h1>
            <br>
            <br>
            <label for="Nome">Nome:</label><br>
            <input type="text" id="nome" name="nome" value="<?php echo $linha['nome']?>"> <br>

            <label for="usuario">Usuario: </label><br>
            <input type="text" id="usuario" name="usuario" value="<?php echo $linha['usuarios']?>"><br>

            <label for="email">E-mail:</label><br>
            <input type="email" id="email" name="email" value="<?php echo $linha['email']?>"> <br>
    
           <label for="senha">Senha: </label><br>
           <input type="text" id="senha" name="senha" value="<?php echo $linha['senha']?>"><br>

             
            <br>
            <input type="submit" value="Enviar">
    </form>
    </body>
</html>
