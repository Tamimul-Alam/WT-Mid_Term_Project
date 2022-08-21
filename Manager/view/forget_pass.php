<?php
 include("../control/forget.php");
?>
<html>
<title>Ecommerece System</title>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/forget_pass.css">
    </head>
    <body>
        <form action="" method="POST">
        <div class="header">
     <center>
      <h1>Password Re-New</h1>
     </center>
     </div>
     <div class="regibox">
     <h1 align ="center" >Change Password</h1>
  </div>
  <div class ="absolute">
  <div class="frame">
  </div> 

                <table align = "center" >
                    <tr>
                    <td>
                    ID:
</td>
                    <td>

                    <input type="number" name="num">
                    
                  
                    </td></tr>
                    
                    <tr>
                        <td>
                            New Pasword:
                        </td>
                        <td>
                            <input type="password" name="ad_new_pass" id="newpass">
                         
                            <input type="checkbox" id="showpass">Show Password</input> 
                        </td>
                    </tr>
               
                    <tr>
                        <td>
                            Confirm Password:
                        </td>
                        <td>
                            <input type="password" name="con_pass" id="conpass">
                          
                           <input type="checkbox" id="showpass2">Show Password</input> 
                        </td>
                    </tr>
                    <td id="sub">
                        <input type="submit" class="button submit" name="save_pass" value="Save new password">
                    </td>
                    

                     
                     <tr><td><a href="managerlogin.php">Login Page</a></td></tr>
                     
                </table>
                

            </fieldset>
        </form>
       

        <script src="../js/forget_pass.js"></script>
    </body>
</html>