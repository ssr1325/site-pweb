<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <?php if(isset($_SESSION['ativa'])) { ?>
        <h1>Painel Administrativo do site</h1>
        <h3>Bem Vindo, <?php echo $_SESSION['nome']; ?></h3>
    <?php }else{
        header("location: login.php");
    } ?>
</body>
</html>