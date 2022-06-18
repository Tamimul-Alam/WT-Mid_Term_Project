<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (!strlen($username) > 0) {
        $errors[] = "Please Enter Username";
    }
    if (!strlen($password) > 0 || !strlen($password) >= 3) {
        $errors[] = "Password must be above or equal to 3 characters";
    }
    if (strlen($username) > 0 && strlen($password) > 0 && strlen($password) >= 3) {
        require_once 'users.php';
        $user = findUser($username);
        if ($user) {
            if ($password === $user['Password']) {
                session_start();
                $_SESSION['current_user'] = $username;
                if (isset($_POST['remember'])) {
                    $existingdata=file_get_contents('../Data/remembered.json');
                    $tempJSONdata = json_decode($existingdata);
                    $tempJSONdata[] = array('user' => array('username' => $username, 'password' => $password));
                    $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
                    file_put_contents("../Data/remembered.json", $jsondata);
                }
                setcookie('current_user', $username, time() + 1800);
                header('location: ../View/seller_dash.php');
            }
        }
    }
}

?>

