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
        echo "<h4><i> You have visited this page earlier !!! <i></h4>";
    }
}
else{
    echo "<h4>We have a new Friend</h4>";
}

?>