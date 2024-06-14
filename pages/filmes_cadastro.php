
<html>
    <head></head>
    <body>
        <form  method="POST" action="filmes_cadastro_salvar.php">
            <h1>Realizar Cadastro de um filme</h1>
            <br>
            <br>
            <label for="titulo">Titulo:</label><br>
            <input type="text" id="titulo" name="titulo"> <br>

            <label for="descricao">Descrição: </label><br>
            <input type="text" id="descricao" name="descricao"><br>

            <label for="ano_lancamento">Ano de lançamento : </label><br>
            <input type="date" id="ano_lancamento" name="ano_lancamento"><br>

            <label for="genero">Genero: </label><br>
            <input type="text" id="genero" name="genero"><br>

            <label for="clasificacao">Clasificação: </label><br>
            <input type="text" id="clasificacao"  name="clasificacao" ><br>
             
            <br>
            <input type="submit" value="Enviar">
    </form>
    </body>
</html>