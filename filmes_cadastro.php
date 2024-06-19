
<html>
    <head></head>
    <body>
        <form  method="POST" action="pages/filmes_cadastro_salvar.php" enctype="multipart/form-data">
            <h1>Realizar Cadastro de um filme</h1>
            <br>
            <br>
            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo:</label><br>
                <input type="text" class="form-control" id="titulo" name="titulo"> <br>
            </div>

            <div class="mb-3">
                <label for= "foto"  class="form-label">Foto</label><br>
                <input type="file" id="foto" name="foto" class="form-control"><br>
            </div>

            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição: </label><br>
                <input type="text" class="form-control" id="descricao" name="descricao"><br>
            </div>

            <div class="mb-3">
                <label for="ano_lancamento" class="form-label">Ano de lançamento : </label><br>
                <input type="date" id="ano_lancamento" name="ano_lancamento" class="form-control"><br>
            </div>

            <div class="mb-3">
                <label for="genero" class="form-label">Genero: </label><br>
                <input type="text" id="genero" name="genero" class="form-control"><br>
            </div>

            <div class="mb-3">
                <label for="classificacao" class="form-label">Classificação: </label><br>
                <select id="classificacao" class="form-select"   name="classificacao" required><br>
                    <option value = ""> Selecione...</option>
                    <option value = "L"> Livre </option>
                    <option value = "10"> +10 </option>
                    <option value = "14"> +14 </option>
                    <option value = "16"> +16 </option>
                    <option value = "18"> +18 </option>
                </select><br>
            </div>

            <br>
             <button type="submit" class="btn btn-secondary btn-sm"> Enviar </button>
    </form>
    </body>
</html>
