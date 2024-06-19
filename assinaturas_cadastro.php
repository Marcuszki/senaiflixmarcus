
<html>
    <head></head>
    <body>
        <form  method="POST" action="pages/assinaturas_cadastro_salvar.php">
            
            <h1>Realizar Cadastro</h1>
            <br>
            <br>
        
            <div class="mb-3">
                <label  for = "plano" class="form-label"> Plano: </label><br>
                <select id = "plano" name = "plano" class="form-select" required>
                    <option value = ""> Selecione...</option>
                    <option value = "Individual"> Individual </option>
                    <option value = "Duo"> Duo </option>
                    <option value = "Familia"> Familia </option>
          
                </select><br>
            </div>      

            <div class="mb-3">
                <label for="data_inicio" class="form-label">Data Inicio : </label><br>
                <input type="date" id="data_inicio" name="data_inicio" class="form-control"><br>
            </div> 

            <div class="mb-3">
                <label for="data_fim" class="form-label">Data Fim: </label><br>
                <input type="date" id="data_fim" name="data_fim" class="form-control"><br>
           </div>  
             
            <br>
            <button type="submit" class="btn btn-secondary btn-sm"> Enviar </button>
    </form>
    </body>
</html>