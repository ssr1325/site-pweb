<?php
    if(!isset($_SESSION)){
        session_start();
    }

    //Sai da sessão
    session_destroy();
    
    //Volta para a página de login
    header("Location: index.php");
?>