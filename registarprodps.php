<?php
    include ('login/ligaBD.php');

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        //Nome do Jogo
        $name = $_REQUEST['nome'];
        if(empty($name)){
            echo "O nome está vazio";
        }else{
            echo $name;
        }
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $imagem = $_FILES['imagem'];
        
        //Imagem do Jogo
        if(isset($_FILES['imagem'])){
            $imagem = $_FILES['imagem'];
            $pasta = "imgup/"; //Pasta de Upload de imagens
            $nomeimagem = $imagem['name'];
            $extensao = strtolower(pathinfo($nomeimagem,PATHINFO_EXTENSION)); //Extensão da imagem do jogo
    
            //Extensões permitidas para upload
            if($extensao != "jpg" && $extensao != 'png'){
                die("Extensão do arquivo recusada");
            }
            

            //Inserir o jogo na BD
            $foi = move_uploaded_file($imagem["tmp_name"], $pasta. $nomeimagem);
            if($foi){
                $query = "INSERT INTO produtosps(nome, preco, imagem) VALUES ('$nome','$preco','$nomeimagem')";
                if(mysqli_query($liga,$query)){
                    echo "<script>alert('Jogo Adicionado!');</script>";
                }else{
                    echo "<script>alert('Erro ao tentar registar Jogo!');</script>";
                }
                //echo "<p> Imagem enviada!";
            }else{
                echo "<script>alert('Falha ao enviar imagem!');</script>Falha ao enviar imagem!";
            }
        }
    }

    
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registarprod.css">
    <title>Registar Jogo</title>
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
        <p>
            <label>Selecione a imagem</label>
            <input type="file" name="imagem" accept="imagem/*">
        </p>
        <p>
            <label>Nome</label>
            <input type="text" name="nome" placeholder="Insira o nome do jogo" required><br>
        </p>
        <p>
            <label>Preço</label>
            <input type="text" name="preco" placeholder="Insira o preço do Jogo" required><br>
        </p>
        <p>
            <input type="submit" name="registar" value="Registar" class="registar">
        </p>
    </form>
</body>
</html>