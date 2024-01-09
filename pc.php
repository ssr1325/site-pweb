<?php
    include('login/ligaBD.php');
?>

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PC</title>

    <link rel="stylesheet" href="pccss.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>
        <header>
            <img src="img/OTSG.png" alt="" class="logo">
            
            <div id="login">
                <a href="login/login.php">
                        <img src="img/LoginB.png" alt="Login" class="loginimg">
            </div>
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="pc.php">PC</a></li>
                <li><a href="ps.php">PS</a></li>
                <li><a href="contactos.html">Contactos</a></li>
                <img src="img/Carrinho.png" alt="Carrinho" class="carrinho">
                
            </ul>
        </header>
        <section class="banner"></section>
        
        <div id="ancoras">
            <h1><a href="#outros">Jogos</a> | <a href="#gift">Gift Cards</a></h1>
        </div>
        
        <br>
        <br>
        
        <div id="titulos">
            <h1>Top Mais Vendidos</h1>
        </div>
        
        <!-- Scroll -->
        <div id="scroll">
        <div id="caixa">
                <div><img id="topjogos" src="img/Football Manager 2024.jpg" alt=""><h3>Football Manager 2024</h3><p>31,99€</p><input type="submit" value="Comprar"></div>
                <div><img id="topjogos" src="img/EA Sports FC 24.jpg" alt=""><h3>FC24</h3><p>31,99€</p><input type="submit" value="Comprar"></div>
                <div><img id="topjogos" src="img/Grand Theft Auto V.jpg" alt=""><h3>GTAV</h3><p>22,48€</p><input type="submit" value="Comprar"></div>
                <div><img id="topjogos" src="img/Red Dead Redemption 2.jpg" alt=""><h3>RDR2</h3><p>20,65€</p><input type="submit" value="Comprar"></div>
                <div><img id="topjogos" src="img/Assetto Corsa Ultimate Edition.jpg" alt=""><h3>Assetto Corsa</h3><p>5,67€</p><input type="submit" value="Comprar"></div>
                <div><img id="topjogos" src="img/WWE 2k23.jpg" alt=""><h3>WWE 2k23</h3><p>9,67€</p><input type="submit" value="Comprar"></div>
                <div><img id="topjogos" src="img/Forza Horizon 5.jpg" alt=""><h3>Forza Horizon 5</h3><p>29,99€</p><input type="submit" value="Comprar"></div>
                <div><img id="topjogos" src="img/unpacking.jpg" alt=""><h3>npacking</h3><p>3,82€</p><input type="submit" value="Comprar"></div>
                <div><img id="topjogos" src="img/Avatar Frontiers of Pandora.jpg" alt=""><h3>AFP</h3><p>50,49€</p><input type="submit" value="Comprar"></div>
        </div>
        </div>
    
        <div id="titulos">
            <h1>Outros</h1>
        </div>
        <div id="outros">
        <?php
            $sqlprod = "SELECT * FROM produtospc";
            $resultado = mysqli_query($liga, $sqlprod);
            if(mysqli_num_rows($resultado)>0){
                while($row = mysqli_fetch_assoc($resultado))
            {
        ?>
            <div id="jogo">
                <div>
                    <img src="imgup/<?php echo $row['imagem'] ?>">
                    <h3 id="nome"><?php echo $row['nome'] ?></h3><h3 id="preco"><?php echo $row['preco'] ?>€</h3>
                </div>
            </div>
            <?php
                }
                }else{
                    echo "não há resultados";
                }
                ?>
        </div>
        </div>
        <div id="gift">
            <div id="gifts">
                <div><img id="cards" src="img/20€ Gift Card.jpg" alt=""><h3>Gift Card 20€</h3><p>19,99€</p><input type="submit" value="Comprar"></div>
                <div><img id="cards" src="img/25€ Gift Card.jpg" alt=""><h3>Gift Card 25€</h3><p>24,99€</p><input type="submit" value="Comprar"></div>
                <div><img id="cards" src="img/50€ Gift Card.jpg" alt=""><h3>Gift Card 50€</h3><p>49,99€</p><input type="submit" value="Comprar"></div>
                <div><img id="cards" src="img/100€ Gift Card.jpg" alt=""><h3>Gift Card 100€</h3><p>99,99€</p><input type="submit" value="Comprar"></div>
            </div>
        </div>
        <footer id="footer">
            
        
                <div class="comunicacoes">
                    <a href="home.html">On The Spot Gaming</a>
                    <ul class="redes-sociais">
        
                    </div>
                    
                <p class="copyright">&copy; Copyright On The Spot Gaming. Todos os direitos reservados.</p>
            </footer>
    <script>
        window.addEventListener("scroll", function(){
            var header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0);
        })
    </script>

</body>
</html>