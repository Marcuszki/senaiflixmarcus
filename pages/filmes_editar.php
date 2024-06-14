<?php

include '../conexao.php';

$q = "SELECT * FROM filmes WHERE id='$id'";
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
        <form  method="POST" action="filmes_cadastro_salvar.php?id=<?php echo $id?>">
            <h1>Realizar Cadastro de um filme</h1>
            <br>
            <br>
            <label for="titulo">Titulo:</label><br>
            <input type="text" id="titulo" name="titulo" value="<?php echo $linha['titulo']?>"> <br>

            <label for="descricao">Descrição: </label><br>
            <input type="text" id="descricao" name="descricao" value="<?php echo $linha['descricao']?>"><br>

            <label for="ano_lancamento">Ano de lançamento : </label><br>
            <input type="text" id="ano_lancamento" name="ano_lancamento" value="<?php echo $linha['ano_lancamento']?>"><br>

            <label for="genero">Genero: </label><br>
            <input type="text" id="genero" name="genero" value="<?php echo $linha['genero']?>"><br>

            <label for="clasificacao">Clasificação: </label><br>
            <input type="text" id="clasificacao"  name="clasificacao" value="<?php echo $linha['clasificacao']?>" ><br>
             
            <br>
            <input type="submit" value="Enviar">
    </form>
    </body>
</html>