<?php
    //Conexão com a BD
    $servername = 'localhost';
    $user = "root";
    $pass = "";
    $bd = 'projeto';
    $liga = mysqli_connect($servername, $user, $pass, $bd);

        if($liga){
            return $liga;
        }else{
            echo "<script>alert('Erro ao tentar registar utilizador!');</script>";
        }
?>