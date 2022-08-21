<?php
include("../model/manager_db.php");

$invalid_adminid="";
$valid_adminid="";
$invalidpass="";
$validpass="";
$invalidcf="";
$validcf="";

$x=0;
// $pass_regex = "/^(?=.[a-z])(?=.[A-Z])(?=.\d)(?=.[@$!%?&])[A-Za-z\d@$!%?&]{8,}$/"; 
if(isset($_REQUEST["save_pass"])){
   $id=$_REQUEST["num"];
    $pass=$_REQUEST['ad_new_pass'];
    $cf=$_REQUEST['con_pass'];


    if(empty($id)){
        $invalid_adminid="Please Enter your Manager Id";
        echo $invalid_adminid;
    }
    else{
        $valid_adminid=$id;
        $x++;

    }


    if(empty($pass)){
      $invalidpass="Please Enter a Valid Password";
      echo $invalidpass;
      echo "<br>";
  }
  else{

      if(strlen($pass)>=8){

          $validpass=$pass;
          $x++;
      }
      else{
          $invalidpass="Password is not valid!";
          echo $invalidpass;
          echo "<br>";
      }
      echo "<br>";
    }
    if(empty($cf)){
        $invalidcf="Please Re-enter Password";
        echo $invalidcf;
        echo "<br>";
    }
    else{
        if($cf==$pass){

            $validcf=$cf;
            $x++;

        }
        else{
            $invalidcf="Password not matched try again!";
            echo $invalidcf;
            echo "<br>";

        }
    }




    //forget password
    if($x==3){
        $mydb=new db();
        $conobj=$mydb->opencon();
        $con=$mydb->Updateprofile($conobj,"manager",$valid_adminid,$validpass,$validcf);
        echo "Password updated";
    }
    else{
        echo "Password not updated";
    }
}








?>