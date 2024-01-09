<?php
    include('ligaBD.php');

    if(isset($_POST['registar']) AND !empty($_POST['email']) AND !empty($_POST['senha'])){

        $erros = array();

        //Caso as duas Passwords inseridas não sejam iguais
        if($_POST['senha'] != $_POST['repetesenha']){
            $erro[] = "As duas Passwords não são iguais";
        }

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $queryEmail = "SELECT * FROM users WHERE email = '$email'";
        $executarQE = mysqli_query($liga, $queryEmail);
        //Contar o número de linhas
        $verificarEmail = $executarQE->num_rows;

        $nome = mysqli_real_escape_string($liga, $_POST['nome']);

        //criptografia da senha
        //$senha = sha1($_POST['senha']);
        
        //verificação de email
        if(!empty($verificarEmail)){
            $erro[] = "O E-mail inserido já foi utilizado!";
        }

        if(empty($erros)){
            //Inserir o user na BD
            $query = "INSERT INTO users (nome,email,senha) VALUES ('$nome','$email','$senha')";
            $executar = mysqli_query($liga, $query);
            if($executar){
                echo "User inserido!";
            }else{
                echo "Erro ao inserir User!";
            }
        }else{
            foreach($erros as $erro){
                echo "<p>$erro</p>";
            }
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registar.css">
    <title>Registar</title>
</head>
<body>
<form action="" method="POST">
    <h1>Registe a sua Conta!</h1>
    <br>
    <br>
        <p>
            
            <input type="text" name="nome" placeholder="Insira o seu nome" required><br>
        </p>
        <br>
        <p>
            
            <input type="email" name="email" placeholder="Insira o seu email" required><br>
        </p>
        <br>
        <p>
            
            <input type="password" name="senha" placeholder="Insira a sua Password" required><br>
        </p>
        <br>
        <p>
            
            <input type="password" name="repetesenha" placeholder="Confirme a sua Password" required>
        </p>
        <br>
        <br>
        <p>
            <input class="registar" type="submit" name="registar" value="Registar">
            <br>
            <br>
            <br>
            <a href="login.php">Login</a>
            <br>
            <br>
            <a href="../home.html">Voltar</a>
        </p>
    </form>
</body>
</html>