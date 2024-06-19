
<?php

include 'conexao.php';

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
        <form  method="POST" action="pages/usuarios_editar_salvar.php?id=<?php echo $id?>">
            <h1>Realizar Cadastro</h1>
            <br>
            <br>
            <div class="mb-3">
                <label for="Nome">Nome:</label><br>
                <input type="text" id="nome" name="nome" class="form-control" value="<?php echo $linha['nome']?>"> <br>
            </div> 
            <div class="mb-3">
                <label for="usuario">Usuario: </label><br>
                <input type="text" id="usuario" name="usuario" class="form-control" value="<?php echo $linha['usuario']?>"><br>
            </div> 
            <div class="mb-3">
                <label for="email">E-mail:</label><br>
                <input type="email" id="email" name="email" class="form-control" value="<?php echo $linha['email']?>"> <br>
            </div> 
            <div class="mb-3">
                <label for="senha">Senha: </label><br>
                <input type="text" id="senha" name="senha" class="form-control" value="<?php echo $linha['senha']?>"><br>
            </div> 

             
            <br>
            <button type="submit" class="btn btn-secondary btn-sm"> Enviar </button>
    </form>
    </body>
</html>
