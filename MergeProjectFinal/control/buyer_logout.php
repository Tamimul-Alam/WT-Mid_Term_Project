<?php
session_start();

if(session_destroy())
{
    header("Location: ../view/buyer_login.php");
}
?>