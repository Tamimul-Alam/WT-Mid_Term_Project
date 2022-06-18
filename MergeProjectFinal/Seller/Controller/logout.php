<?php
    session_start();
    if (isset($_SESSION['current_user'])) {
        session_destroy();
        setcookie('current_user', $username, time() - 5);
        header('location: ../View/login.php');
        $existingdata=file_get_contents('../Data/remembered.json');
        if (isset($existingdata)) {
            $jsondata = json_encode(array(), JSON_PRETTY_PRINT);
            file_put_contents("../Data/remembered.json", $jsondata);
        }
    }
?>