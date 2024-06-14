
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
            <label for="Nome">Nome:</label><br>
            <input type="text" id="nome" name="nome" value="<?php echo $linha['nome']?>"> <br>

            <label for="cpf">CPF: </label><br>
            <input type="text" id="cpf" name="cpf" value="<?php echo $linha['cpf']?>"><br>

            <label for="endereco">Endereço: </label><br>
            <input type="text" id="endereco" name="endereco" value="<?php echo $linha['endereco']?>"><br>

            <label for="bairro">Bairro: </label><br>
            <input type="text" id="bairro" name="bairro" value="<?php echo $linha['endereco']?>"><br>

            <label for="cidade">Cidade: </label><br>
            <input type="text" id="cidade"  name="cidade"  value="<?php echo $linha['cidade']?>"><br>

            <label class="letras" for = "estado"> Estado: </label><br>
            <select id = "estado" name = "estado"  value="<?php echo $linha['estado']?>"  required>
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

            <label for="cep">CEP: </label><br>
            <input type="text" id="cep" name="cep" value="<?php echo $linha['cep']?>"><br>

            <label for="email">E-mail:</label><br>
            <input type="email" id="email" name="email" value="<?php echo $linha['email']?>"> <br>
    
           <label for="telefone">Telefone: </label><br>
           <input type="number" id="telefone" name="telefone" value="<?php echo $linha['telefone']?>"><br>

             
            <br>
            <input type="submit" value="Enviar">
    </form>
    </body>
</html>