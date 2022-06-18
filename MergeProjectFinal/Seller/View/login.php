
<?php
$errors = array();

$existingdata=file_get_contents('../Data/remembered.json');
$tempJSONdata = json_decode($existingdata, true);
if (isset($tempJSONdata[0])) {
    if (isset($tempJSONdata[0]['user']['username']) && isset($tempJSONdata[0]['user']['password'])) {
        $username = $tempJSONdata[0]['user']['username'];
        $password = $tempJSONdata[0]['user']['password'];
        
        require_once '../Controller/users.php';
        $user = findUser($username);
        if ($user) {
            if ($user['Password'] === $password) {
                session_start();
                $_SESSION['current_user'] = $username;
                setcookie('current_user', $username, time() + 1800);
                header('location: ../View/seller_dash.php');
            }
        }
    }
}
include_once '../Controller/login_validation.php';
?>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <center>
    <h1>Login</h1>
<hr>
    <form action="" method="post">
        <table>
            <tr>
                <td>Username:</td>
                <td>
                    <input type="text" name="username" placeholder="Enter First Name">
                </td>
            </tr>
            <tr>
                <td>Password:</td>
                <td>
                    <input type="password" name="password" placeholder="Enter Password">
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" name="remember" id="remember"></td>
                <td>Remember Me</td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Log In">
                </td>
                <td>
                    Don't have an account, <a href="registration.php">Sign Up</a>?
                </td>
            </tr>
        </table>
    </form>
    <?php
        if (count($errors) > 0) {
            foreach ($errors as $error) { ?>
                <p><?php echo $error ?></p>
    <?php        }
        }
    ?>
</center>
</body>
</html>