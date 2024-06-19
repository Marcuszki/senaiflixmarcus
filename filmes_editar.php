<?php

include 'conexao.php';

$id = $_GET['id'];
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
        <form  method="POST" action="pages/filmes_editar_salvar.php?id=<?php echo $id?>" enctype="multipart/form-data">
            <h1>Realizar Cadastro de um filme</h1>
            <br>
            <br>

            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo:</label><br>
                <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $linha['titulo']?>"> <br>
            </div>  


            <div class="mb-3">
                <label for= "foto" class="form-label">Foto</label><br>
                <input type="file" class="form-control" id="foto" name="foto"  value="<?php echo $linha['foto']?>"><br>
            </div>  

            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição: </label><br>
                <input type="text" class="form-control" id="descricao" name="descricao" value="<?php echo $linha['descricao']?>"><br>
            </div>  

            <div class="mb-3">
                <label for="ano_lancamento" class="form-label">Ano de lançamento : </label><br>
                <input type="text" class="form-control" id="ano_lancamento" name="ano_lancamento" value="<?php echo $linha['ano_lancamento']?>"><br>
            </div>  

            <div class="mb-3">
                <label for="genero" class="form-label">Genero: </label><br>
                <input type="text" class="form-control" id="genero" name="genero" value="<?php echo $linha['genero']?>"><br>
            </div>  

            <div class="mb-3">
                <label for="classificacao" class="form-label">Clasificação: </label><br>
                <select id="classificacao"  name="classificacao" class="form-select" value="<?php echo $linha['classificacao']?>" ><br>
                <option value = ""> Selecione...</option>
                    <option value = "L"> Livre </option>
                    <option value = "+10"> +10 </option>
                    <option value = "+14"> +14 </option>
                    <option value = "+16"> +16 </option>
                    <option value = "+18"> +18 </option>
                
                </select><br>
            </div>  
            <br>
            <button type="submit" class="btn btn-secondary btn-sm"> Enviar </button>
    </form>
    </body>
</html>