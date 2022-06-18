<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
 include ("../control/adminlogin_validate.php") ?>

<html>
<head>
    <title>Ecommerece System</title>
  </head>
  <body>
    <form action = "" method = "POST">
      <fieldset>
      <h2 align="center">Admin Login Form</h2>
      </fieldset>

      <fieldset>
            <legend align = "center"><h3><i>Login Details</i></h3></legend>

            <table align = "center" >
              <tr>
                <td>User Name:</td>
                <td><input type="text" name="admin_uname" placeholder="User Name">
                <?php echo $usernameError; ?></td>
                
              </tr>

              <tr>
                <td>Password:</td>
                <td><input type="password" name="admin_pass" placeholder="Password">
                <?php echo $userPass_Error; ?></td>
              </tr>

              <tr>
                <td align = "left">
                  <input type = "submit" name = "submit" value = "Login">
                </td>
              </tr>

              <tr>
                <td> <a href = "adminregi.php">Not have an account? Register</a>
              </tr>
            </table>
      </fieldset>      
  </body>
</html>
 