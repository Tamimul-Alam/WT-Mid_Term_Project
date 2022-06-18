<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}

if(isset($_SESSION["set_username"]))
{
    header("Location: ../view/adminprofile.php");
}
error_reporting(0);
//session_start();
$invalid_fstname="";
$invalid_lstname="";
$invalid_gender="";
$invalid_religion="";
$invalid_nationlty="";
$invalid_email="";
$invalid_phnnum="";
$invalid_dob="";
$invalid_address="";

$invalid_set_uname="";
$invalid_set_pass="";
$invalid_confrm_pass="";

///validate data for storing in admindata.json file

$valid_fstname="";
$valid_lstname="";
$valid_gender="";
$valid_religion="";
$valid_nationlty="";
$valid_email="";
$valid_phnnum="";
$valid_dob="";
$valid_address="";

$valid_set_uname="";
$valid_set_pass="";
$valid_confrm_pass="";
$datacount= 0;
$hasError= 0;


if(isset($_POST['submit']))
{
    if($_SERVER["REQUEST_METHOD"]=="POST")
{


    $fstname=$_REQUEST['admin_fname'];
    $lstname=$_REQUEST['admin_lname'];
    //$gender=$_REQUEST['gender'];
    $religion=$_REQUEST['religion'];
    $nationality=$_REQUEST['admin_natnlty'];
    $email=$_REQUEST['admin_email'];
    $phnnum=$_REQUEST['admin_phnnum'];
    $dob=$_REQUEST['admin_dob'];
    $address=$_REQUEST['address'];

    $set_uname=$_REQUEST['admin_set_uname'];
    $set_pass=$_REQUEST['admin_set_pass'];
    $confirm_pass=$_REQUEST['admin_conifrm_pass'];

    if(empty($fstname))
    {
        $invalid_fstname="*firstname required";
    }
    else if(!preg_match("/^[a-zA-Z]*$/",$fstname))
    {
        $invalid_fstname="*firstname can contain only alphabets";
    }
    else
    {
        $valid_fstname=$fstname;
        $datacount++;
    }

    if(empty($lstname))
    {
        $invalid_lstname="*lastname required";
    }
    else if(!preg_match("/^[a-zA-Z]*$/",$lstname))
    {
        $invalid_lstname="*last name can contain only alphabets";
    }
    else
    {
        $valid_lstname=$lstname;
        $datacount++;
    }
    //gender
    if(isset($_REQUEST['gender']))
    {
        $valid_gender=$_REQUEST['gender'];
        $datacount++;
    }
    else{
        $invalid_gender="*gender required";
    }
     //religion
    if(empty($religion))
    {
        $invalid_religion="*religion required";
    }
    else{
    $valid_religion= "$religion";
    $datacount++;

    }
     //nationality
     if(empty($nationality))
     {
      $invalid_nationlty="*nationality required";
     }
     else{
      $valid_nationlty=$nationality;
      $datacount++;
     }
     //date of birth
    if($dob)
    {
        $valid_dob=$dob;
        $datacount++;
    }
    else
    {
        $invalid_dob="*invalid date or date of birth required";
    }
     //phone number
    if(empty($phnnum))
    {
        $invalid_phnnum="*mobile number required";
    } 
    else if(!empty($phnnum) && !preg_match("/^[0-9]*$/",$phnnum) && strlen($phnnum)<11)
    {
        $invalid_mobile="*invlaid phone number";
    }
    else
    {
        $valid_phnnum=$phnnum;
        $datacount++;
    }
    //email
    if(empty($email))
    {
        $invalid_email="*email required";
    }
    elseif (empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email)) {
         $invalid_email="*invlaid email or email field is empty";
    }
    else
    {
        $valid_email=$email;
        $datacount++;
    }

    if(!empty($address))
    {
        $valid_address=$address;
        $datacount++;
    }
    else
    {
        $invalid_address="*address required";
    }

//set username and password

    if(empty($set_uname))
    {
        $invalid_set_uname="*username required";
    }
    else
    {
        $valid_set_uname=$set_uname;
        $datacount++;
    }

    if(empty($set_pass))
    {
        $invalid_set_pass="*password required";
    }
    else if(!empty($set_pass) && strlen($set_pass)<8)
    {
        $invalid_set_pass="*invalid password";
    }
    else
    {
        $valid_set_pass=$set_pass;
        $datacount++;
    }
  

    if($confirm_pass)
    {
        $valid_confrm_pass=$confirm_pass;
        $datacount++;
    }
    else
    {
        $invalid_confrm_pass="*confirm password required";
    }
//matching set password and confirm password
    if($valid_set_pass == $valid_confrm_pass)
    {
        $valid_confrm_pass=$valid_confrm_pass;
        $datacount++;
    }
    else
    {
        $invalid_confrm_pass="*password and confirm password not matched";
    }


    if($datacount==13)   
    {
///data to store in json
if($hasError == 0){
    $admin_data=array(
        "firstname"=>$valid_fstname,
        "lastname"=>$valid_lstname,
        "gender"=>$valid_gender,
        "religion"=>$valid_religion,
        "dob"=>$valid_dob,
        "phone number"=>$valid_phnnum,
        "email"=>$valid_email,
        "address"=>$valid_address,
        "set_username"=>$valid_set_uname,
        "set_password"=>$valid_set_pass,
    );
 
    $remaining_data=file_get_contents("../data/admindata.json");
    $fetch_data=json_decode($remaining_data);
    $fetch_data[]=$admin_data;

    $dump_json=json_encode($fetch_data, JSON_PRETTY_PRINT);
    
    if(file_put_contents("../data/admindata.json",$dump_json))
    {
         echo "<br> Successfully Registered!!!<br>";
    }
}
else
{
    echo "Failed to confirm registration !!! Please give all the imformations correctly";
}
 
 }
}
}
?>