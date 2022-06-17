<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
include ("../control/loginvalidation.php"); 
?>
<html>
    <body>
        <form action="" method="post">
    <fieldset>
        <h1 align="center">Manager Login Form</h1>
        </fieldset>
        
        <fieldset>
        <legend align="center"><h2>Login Details</h2></legend>
        <table align = "center" >
        <tr>
            <td>User Name :</td>
            <td><input type="text" name="username" placeholder="User Name">
            <?php echo $invalidedusername; ?></td>
            </tr>

            <tr>
            <td>Password :</td>
            <td><input type="password" name="userpass" placeholder="Password">
            <?php echo $invalidedpassword; ?></td>
            </tr>
            <tr>
            <td>
            
            <input type="submit" name="submit" value="login">
            
            </td>
            </tr>
            <tr>
                <td> <a href = "adminresetpass.php">Forgot password?</a>
              </tr>

              <tr>
                <td> <a href = "manager_registration.php">Not have an account? Register</a>
              </tr>
</fieldset>
</form>
</body>
</html>
            
            
            
