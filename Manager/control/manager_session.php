<?php
session_start();
if(isset($_SESSION["User_name"])){
    echo "<h2>Welcome  ".$_SESSION["User_name"]."</h2>";
}

if(empty($_SESSION["User_name"])){

    header("Location: ../view/managerlogin.php");
}
?>