<?php
session_start();
if(isset($_SESSION["set_username"])){
    echo "<h2>Welcome  ".$_SESSION["set_username"]."</h2>";  
}

if(empty($_SESSION["set_username"])){

    header("Location: ../view/adminlogin.php");
}
?>