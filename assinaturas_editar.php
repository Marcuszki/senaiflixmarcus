
<?php

include 'conexao.php';

$id = $_GET['id'];
$q = "SELECT * FROM assinaturas WHERE id='$id'";
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
        <form  method="POST" action="pages/assinaturas_editar_salvar.php?id=<?php echo $id?>">
            
            <h1>Realizar Cadastro</h1>
            <br>
            <br>
        
            <div class="mb-3">
                <label  for = "plano" class="form-label"> Plano: </label><br>
                <select id = "plano" name = "plano" class="form-select" value="<?php echo $linha['plano']?>"required>
                    <option value = ""> Selecione...</option>
                    <option value = "Individual"> Individual </option>
                    <option value = "Duo"> Duo </option>
                    <option value = "Familia"> Familia </option>
          
                </select><br>
            </div>      

            <div class="mb-3">
                <label for="data_inicio" class="form-label">Data Inicio : </label><br>
                <input type="date" id="data_inicio" name="data_inicio" value="<?php echo $linha['data_inicio']?>"class="form-control"><br>
            </div> 

            <div class="mb-3">
                <label for="data_fim" class="form-label">Data Fim: </label><br>
                <input type="date" id="data_fim" name="data_fim" value="<?php echo $linha['data_fim']?>"class="form-control"><br>
           </div>  
             
            <br>
            <button type="submit" class="btn btn-secondary btn-sm"> Enviar </button>
    </form>
    </body>
</html>


