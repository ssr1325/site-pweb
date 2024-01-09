<?php

$id = $_GET['id'];
include('login/ligaBD.php');

$sqlusers = "DELETE FROM users WHERE id=$id";

if(mysqli_query($liga,$sqlusers)){
    echo "Registo removido!";
}else{
    echo "Erro: ".$sqlusers."<br>".mysqli_error($liga);
}

$sqlprodspc = "DELETE FROM produtospc WHERE id=$id";

if(mysqli_query($liga,$sqlprodspc)){
}else{
    echo "Erro: ".$sqlprodspc."<br>".mysqli_error($liga);
}

$sqlprodsps = "DELETE FROM produtosps WHERE id=$id";

if(mysqli_query($liga,$sqlprodsps)){
}else{
    echo "Erro: ".$sqlprodsps."<br>".mysqli_error($liga);
}
mysqli_close($liga);

?>