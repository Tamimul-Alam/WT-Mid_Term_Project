<?php
if(!isset($_SESSION)) 
    {
    session_start(); 
    }
include("adminreg_validate.php");
error_reporting(0);
$invalidUsername="";
$invalidPassword="";
$validUsername="";
$validPassword="";

$HasError=0;
$usernameError="";
$userPass_Error="";
$admin_data = file_get_contents('../data/admindata.json');
$decoded_data = json_decode($admin_data);

if (isset($_POST["submit"])) {
    foreach ($decoded_data as  $key => $udata) {
        if (($udata-> set_username == $_POST["admin_uname"] &&  $udata->set_password == $_POST["admin_pass"])) {

            $_SESSION["set_username"] = $_POST["admin_uname"];
            $_SESSION["set_password"] = $_POST["admin_pass"];
             if (!empty($_SESSION["set_username"]))
             {
                header("Location: ../view/adminprofile.php");
             }
        }
        if(empty($_REQUEST["admin_uname"])||(empty($_REQUEST['admin_pass'])))
            {
                $usernameError= "Enter your user name and password !";
            }
            else{

                $hasError=1;
            }   
        }
    if($hasError==1){
        $userPass_Error= "Your username or password is incorrect !";
    }
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(isset($_REQUEST['submit']))
        {
            $username=$_REQUEST["admin_uname"];
            $password=$_REQUEST["admin_pass"];
    
            if(empty($username))
            {
                $invalidUsername= "*username can't be empty";
            }
            else
            {
               $validUsername=$username;
            }
            if(empty($password))
            {
                $invalid_password= "*password can't be empty";
            }
            
            else if(!empty($password) && strlen($password)<8)
            {
                $invalidPassword= "*password must be 8 characters";
            }
            else
            {
                $validPassword=$password;
            }
           
        }

}
}
?>