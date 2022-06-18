<?php
session_start();
if(isset($_SESSION["User_name"])){
    echo "<h5>Hey there, ".$_SESSION["User_name"]."</h5>";  
}

if(empty($_SESSION["User_name"])){

    header("Location: ../view/buyer_login.php");
}
?>