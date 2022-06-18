
<?php
error_reporting(0); 
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
$user_cookie=$_SESSION["User_name"];
//$cookie_value= 'hello';
if(!empty($user_cookie))
{
    setcookie($user_cookie,"hello", time()+36000);
    if($_COOKIE[$user_cookie]=="hello"){
        echo "<h4> Welcome Back :D </h4>";
    }
}
else{
    echo "<h4>Nice to see you here!</h4>";
}

?>