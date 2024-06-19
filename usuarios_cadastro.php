
<html>
    <head></head>
    <body>
        <form  method="POST" action="pages/usuarios_cadastro_salvar.php">
            <h1>Realizar Cadastro</h1>
            <br>
            <br>
            <div class="mb-3">
                <label for="Nome">Nome:</label><br>
                <input type="text" id="nome" name="nome" class="form-control"> <br>
            </div>

            <div class="mb-3">
                <label for="usuario">Usuario: </label><br>
                <input type="text" id="usuario" name="usuario" class="form-control"><br>
            </div>

            <div class="mb-3">
                <label for="email">E-mail:</label><br>
                <input type="email" id="email" name="email" class="form-control"> <br>
                </div>

            <div class="mb-3">
                <label for="senha">Senha: </label><br>
                <input type="text" id="senha" name="senha" class="form-control"><br>
            </div>

             
            <br>
            <button type="submit" class="btn btn-secondary btn-sm"> Enviar </button>
    </form>
    </body>
</html>