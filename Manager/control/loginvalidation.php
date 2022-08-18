<?php
include("../model/manager_db.php");
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
// include("process.php");
$x=0;
$invalidedusername="";
$invalidedpassword="";
$validedusername="";
$validedpassword="";
// $uname=$_REQUEST["user"];
// $password=$_REQUEST["pass"];
// // $username=$password="";
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(isset($_REQUEST['submit']))
        {
            $username=$_REQUEST["username"];
            $userpassword=$_REQUEST["userpass"];

            if(empty($username))
            {
                $invalidedusername= "you must enter username";
            }
            else
            {
               $validedusername=$username;
               $x++;
            }
            if(empty($userpassword))
            {
                $invalidedpassword= "you must enter password";
            }

            else if(!empty($userpassword) && strlen($userpassword)<8)
            {
                $invalidedpassword= "your password must be 8 characters";
            }
            else
            {
                $validedpassword=$userpassword;
                $x++;
            }
            if($x==2){
                $mydb=new db();
                $conobj=$mydb->opencon();
                $results=$mydb->checklogin($conobj,"manager",$username,$userpassword);
                if($results->num_rows>0){
                   $_SESSION["User_name"] = $_POST["username"];
                   $_SESSION["Password"] = $_POST["userpass"];

                   if (!empty($_SESSION["User_name"]))
                  {
                    header("Location: ../view/managerprofile.php");
                  }
                 
            }
                else{
                    echo "Manager not found<br>";
                }
            }

        


        // $existingdata = file_get_contents('../data/data.json');
        // $tempJSONdata = json_decode($existingdata);

        // foreach($tempJSONdata as $existingdata)
        // {
        //     if($existingdata->User_name==$_POST["uname"] && $existingdata->Password==$_POST["pass"])
        //     {
        //         // $_SESSION["User_name"] = $_POST["uname"];
              
        //         // $_SESSION["Password"] = $_POST["pass"];
        //         header("location:../view/managerprofile.php");
        //     }
        //     else
        //     {
        //         if(empty($username))
        //         {
        //             $invalidedusername= "you must enter username";
        //         }
        //        else
        //        {
        //         $invalidedusername= "*Invalid username or password";
        //        }
        //     }
     
        }
    
    
    
    

    }
?>