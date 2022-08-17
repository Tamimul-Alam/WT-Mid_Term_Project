<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
include ("../control/loginvalidation.php"); 
?>
<html>
    <title>Ecommerece System</title>
    <head>  
    <link rel="stylesheet" type="text/css" href="../css/manager_login.css">
    </head>
    <body>
        <form action="" method="post">
        <div class="header_login">
        <center>
        <h1>Manager Login Form</h1>
        </center>
        </div>
        
        <div class="regibox_login">
        <h1 align ="center" >Login Information</h1>
        </div>
        <div class ="absolute_login">
        <div class="frame_login">
        </div>
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

            <td id="sub1">
            
            <input type="submit" class="button submit" name="submit" value="login">
            
            </td>
            </tr>

              <tr>
                <td> <a href = "manager_registration.php">Not have an account? Register</a>
              </tr>
</fieldset>
</form>
</body>
</html>
            
            
            
