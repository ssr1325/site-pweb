<?php
    include('ligaBD.php');


    if(isset($_POST['email']) || isset($_POST['senha'])){

        if(strlen($_POST['email']) == 0){
            //Caso email não tenha sido preenchido
            echo "Preencha o seu e-mail";
        }else if(strlen($_POST['senha']) == 0){
            //Caso a password não tenha sido preenchida
            echo "Preencha a sua senha";
        }else{

            $email = $_POST['email'];
            $senha = $_POST['senha'];
            
            //Seleção na BD
            $query = "SELECT * FROM users WHERE email = '$email' AND senha = '$senha'";
            $executar = $liga->query($query);

            //Número de linhas
            $quantidade=$executar->num_rows;

            if($quantidade == 1){

                $user = $executar->fetch_assoc();

                if(!isset($_SESSION)){
                    session_start();
                }

                $_SESSION['id'] = $user['id'];
                $_SESSION['nome'] = $user['nome'];
                //redirecionar para a página de user
                header("Location: ../userpc.php");

            }else{
                echo "Falha ao logar! E-mail ou senha incorretos!";
            }
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
    <form action="" method="POST">
    <h1>Acesse a sua Conta!</h1>
    <br>
    <br>
        <p>
            
            <input type="email" name="email" placeholder="Insira o seu email" required><br>
        </p>
        <br>
        <br>
        <p>
            
            <input type="password" name="senha" placeholder="Insira a sua Password" required><br>
        </p>
        <p>
            <br>
            <br>
            <input class="login" type="submit" name="login" value="Login">
            <br>
            <br>
            <a href="registar.php">Registar...</a>
            <br>
            <br>
            <a href="../home.html">Voltar</a>
        </p>
    </form>
</body>
</html>