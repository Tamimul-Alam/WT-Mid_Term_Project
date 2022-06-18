<?php

$cookie_name="Asif";
$cookie_value="Manager!!!!";
setcookie($cookie_name, $cookie_value,time() + 86400, "/");

if(isset($_COOKIE[$cookie_name])) {
    echo "Welcome again manager";
  }else {
    echo " <br/>Welcome to this page manager " .$cookie_name;
}

?>

<html>

    <body>
        <form>
                <fieldset>
                <h1 align="center">Welcome to your Managing Profile</h1></legend>
            
                </fieldset>
                
                    <br><br>
                <fieldset>
                <table>
                <legend align="center"><h2>Manager Panel</h2></legend>
                <tr> <td> <a href = "https://mail.google.com/mail/u/0/#inbox?compose=new" target="_blank">Contact With Users</a></td></tr>
                <tr> <td> <a href = "https://github.com/Tamimul-Alam" target="_blank">Github Profile</a></td></tr>
                <tr> <td> <a href = "https://www.udemy.com/" target="_blank">Education sites</a></td></tr>
                <tr> <td> <a href="../control/logout.php" name ="Logout">Logout</a>

                </table>
                </fieldset>
               
                

        </form>
        
    </body>
</html>
