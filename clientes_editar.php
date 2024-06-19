
<?php

include 'conexao.php';

$id = $_GET['id'];
$q = "SELECT * FROM clientes WHERE id='$id'";
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
        <form action="pages/clientes_editar_salvar.php?id=<?php echo $id?>"  method="POST" >
            <h1>Realizar Cadastro</h1>
            <br>
            <br>
            <div class="mb-3">
                <label for="Nome" class="form-label">Nome:</label><br>
                <input type="text" id="nome" name="nome" class="form-control" value="<?php echo $linha['nome']?>"> <br>
            </div> 
            <div class="mb-3">
                <label for="cpf" class="form-label">CPF: </label><br>
                <input type="text" id="cpf" name="cpf" class="form-control" value="<?php echo $linha['cpf']?>"><br>
            </div> 
            <div class="mb-3">
                <label for="endereco" class="form-label">Endereço: </label><br>
                <input type="text" id="endereco" name="endereco" class="form-control" value="<?php echo $linha['endereco']?>"><br>
            </div> 
            <div class="mb-3">
                <label for="bairro" class="form-label">Bairro: </label><br>
                <input type="text" id="bairro" name="bairro" class="form-control" value="<?php echo $linha['endereco']?>"><br>
            </div> 
            <div class="mb-3">
                <label for="cidade" class="form-label">Cidade: </label><br>
                <input type="text" id="cidade"  name="cidade"  class="form-control" value="<?php echo $linha['cidade']?>"><br>
            </div> 
            <div class="mb-3">
                <label class="letras" for = "estado" class="form-label"> Estado: </label><br>
                <select id = "estado" name = "estado" class="form-select" value="<?php echo $linha['estado']?>"  required>
                    <option value = ""> Selecione...</option>
                    <option value = "AC"> Acre </option>
                    <option value = "AL"> Alagoas </option>
                    <option value = "AP"> Amapá </option>
                    <option value = "AM"> Amazonas </option>
                    <option value = "BA"> Bahia </option>
                    <option value = "CE"> Ceará </option>
                    <option value = "ES"> Espirito Santo </option>
                    <option value = "GO"> Goiás </option>
                    <option value = "MA"> Maranhão </option>
                    <option value = "MT"> Mato Grosso </option>
                    <option value = "MS"> Mato Grosso do Sul </option>
                    <option value = "MG"> Minas Gerais </option>
                    <option value = "PA"> Pará </option>
                    <option value = "PB"> Paraíba </option>
                    <option value = "PR"> Paraná </option> 
                    <option value = "PE"> Pernambuco </option>
                    <option value = "PI"> Piauí </option>
                    <option value = "RJ"> Rio de Janeiro </option>
                    <option value = "RN"> Rio Grande do Norte </option>
                    <option value = "RS"> Rio Grande do Sul </option>
                    <option value = "RO"> Rondônia </option>
                    <option value = "RR"> Roraima </option>
                    <option value = "SC"> Santa Catarina </option>
                    <option value = "SP"> São Paulo </option>
                    <option value = "SE"> Sergipe </option>
                    <option value = "TO"> Tocantins </option>
                </select><br>
            </div> 
            <div class="mb-3">
                <label for="cep" class="form-label">CEP: </label><br>
                <input type="text" id="cep" name="cep" class="form-control" value="<?php echo $linha['cep']?>"><br>
            </div> 
            <div class="mb-3">
                <label for="email" class="form-label">E-mail:</label><br>
                <input type="email" id="email" name="email" class="form-control" value="<?php echo $linha['email']?>"> <br>
            </div> 
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone: </label><br>
                <input type="number" id="telefone" name="telefone" class="form-control" value="<?php echo $linha['telefone']?>"><br>
           </div> 

             
            <br>
            <button type="submit" class="btn btn-secondary btn-sm"> Enviar </button>
    </form>
    </body>
</html>