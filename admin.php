<?php
    include('login/ligaBD.php');

    echo "Bem vindo ADMIN!";

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admincss.css">
    <title>Administrador</title>
</head>
<body>
    <table class=tabela border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Password</th>
            <th>Opções</th>
        </tr>
    <?php
        $sql = "SELECT * FROM users";
        $resultado = mysqli_query($liga, $sql);
        if(mysqli_num_rows($resultado)>0){
            while($row = mysqli_fetch_assoc($resultado)){
    ?>
        <tr>
            <th scope="row"><?php echo $row['id']; ?></th>
            <td><?php echo $row['nome']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['senha']; ?></td>
            <td><a href="eliminar.php?id=<?php echo $row['id'];?>">Apagar</a></td>
        </tr>
        <?php
    }
    }else{
        echo "não há resultados";
    }
    ?>
    </table>
        <h1>Jogos PC</h1>
        <a href="registarprodpc.php">Registar Jogo PC</a>
    <br>
    <br>
    <table class=tabela border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Imagem</th>
            <th>Opções</th>
        </tr>
    <?php
        $sqlprod = "SELECT * FROM produtospc";
        $resultado = mysqli_query($liga, $sqlprod);
        if(mysqli_num_rows($resultado)>0){
            while($row = mysqli_fetch_assoc($resultado))
        {
    ?>
        <tr>
            <th scope="row"><?php echo $row['id']; ?></th>
            <td><?php echo $row['nome']; ?></td>
            <td><?php echo $row['preco']; ?></td>
            <td><img height="50" src="imgup/<?php echo $row['imagem']; ?>"></td>
            <td><a href="eliminar.php?id=<?php echo $row['id'];?>">Apagar</a></td>
        </tr>
        <?php
    }
    }else{
        echo "não há resultados";
    }
    ?>
    </table>
    <h1>Jogos PS</h1>
        <a href="registarprodps.php">Registar Jogo PS</a>
    <br>
    <br>
    <table class=tabela border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Imagem</th>
            <th>Opções</th>
        </tr>
    <?php
        $sqlprod = "SELECT * FROM produtosps";
        $resultado = mysqli_query($liga, $sqlprod);
        if(mysqli_num_rows($resultado)>0){
            while($row = mysqli_fetch_assoc($resultado))
        {
    ?>
        <tr>
            <th scope="row"><?php echo $row['id']; ?></th>
            <td><?php echo $row['nome']; ?></td>
            <td><?php echo $row['preco']; ?></td>
            <td><img height="50" src="imgup/<?php echo $row['imagem']; ?>"></td>
            <td><a href="eliminar.php?id=<?php echo $row['id'];?>">Apagar</a></td>
        </tr>
        <?php
    }
    }else{
        echo "não há resultados";
    }
    ?>
    </table>
</body>
</html>