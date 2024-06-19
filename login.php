<?php
include('../conexao.php');

session_start();

if (isset($_SESSION['id'])) {
    header("Location: ../index.php");
    exit();
}


if(isset($_POST['email']) || isset($_POST['senha'])){

    if(strlen($_POST['email'])==0){
        echo"Preencha seu email";
    }else if(strlen($_POST['senha']) == 0){
        echo"Preencha sua senha";
    }else{

        $email = $conn->real_escape_string($_POST['email']);
        $senha = $conn->real_escape_string($_POST['senha']);
    
        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha' ";
        $sql_query = $conn->query($sql) or die("Falha ao conectar:" . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1){

            $usuario = $sql_query->fetch_assoc();
            

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: ../index.php");
            exit();
            
        }else{
            echo"Falha ao logar! E-mail ou senha incorretos";

        }

    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Login</title>
    <style>
        /* Custom CSS to ensure the form looks good */
        .wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        #formContent {
            border-radius: 10px;
            background: #fff;
            padding: 30px;
            box-shadow: 0 10px 30px 0 rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        #icon {
            width: 50%;
        }
        input[type="text"], input[type="password"] {
            margin: 10px 0;
            width: 80%;
            padding: 10px;
        }
        input[type="submit"] {
            width: 80%;
            padding: 10px;
            margin-top: 20px;
            cursor: pointer;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
  

  

    
    <h1>Acesse sua conta</h1>
    <form action="" method="POST">
   
            <input type="text"  id="login"name="email" placeholder="Email" class="fadeIn second"><br>
      
            <input type="text" id="password"    name="senha" placeholder="Senha"  class="fadeIn third" ><br>
        
        <input type="submit" class="fadeIn fourth" value="Log In">
    </form>
    </div>
</div>

</body>

</html>
