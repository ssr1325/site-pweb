<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos</title>

    <link rel="stylesheet" href="contactos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <?php
        session_start();

        //Caso o nome de inicio de sessão seja admin
        if ($_SESSION['nome'] == 'admin'){
            header("Location: admin.php");
        }
    ?>

</head>
<body>
        <header>
            <img src="img/OTSG.png" alt="" class="logo">
            <div id="login">
                <a href="login/logout.php">
                        <img src="img/LogoutB.png" alt="Login" class="loginimg">
            </div>
            <ul>
                <li><a href="userhome.php">Home</a></li>
                <li><a href="userpc.php">PC</a></li>
                <li><a href="userps.php">PS</a></li>
                <li><a href="usercontactos.php">Contactos</a></li>
                
                
            </ul>
            
        </header>
        
        <div class="sobre">
        <img src="img/OTSG.png" alt="" class="logo">
        </div>

    <div class="form">

        <form action="https://formsubmit.co/e4d19dff5c5394a918174755627c826f" method="POST">
            <input type="text" name="name" required placeholder="Nome">
            <input type="email" name="email" required placeholder="Email">
            <input type="text" name="subject" required placeholder="Assunto">
            <textarea type="message" name="message" required placeholder="Mensagem"></textarea>
            <input type="hidden" name="_template" value="table">
            <button class="btn-enviar" type="submit">Enviar</button>
        </form>
    </div>
        <footer id="footer">
            <footer>
        
                <div class="comunicacoes">
                    <a href="userhome.php">On The Spot Gaming</a>
                    <ul class="redes-sociais">
        
                    </div>
                    
                <p class="copyright">&copy; Copyright On The Spot Gaming. Todos os direitos reservados.</p>
            </footer>
        </footer>
    
        <script>
            window.addEventListener("scroll", function(){
                var header = document.querySelector("header");
                header.classList.toggle("sticky", window.scrollY > 0);
            })
        </script>

</body>
</html>