<?php
include("../model/manager_db.php");
// session_start();
error_reporting(0);

$validatename="";
$validatename1="";
$validateemail="";
$validateradio="";
$validateradio1="";
$validateradio2="";
$validationuname="";
$validationpass="";
$validationpass1="";
$validationcb="";
$validationage="";
$validationdob="";
$validationnum="";
$validationaddress="";
$validationaddress1="";
$validationreligion="";
$validationfile="";
// $v1="";
// $v2=$v3=
$name=$term=$name1=$age=$dob=$number=$address=$religion=$address1=$email=$exp=$marriage_status=$file=$gender="";
///valid data to store in json
$valid_set_user="";
$valid_set_pass="";
$valid_con_pass="";

$x=0;
if(isset($_POST['submit']))
{
    if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name=$_REQUEST["fname"];
    $name1=$_REQUEST["lname"];
    $uname=$_REQUEST["user"];
    $email=$_REQUEST["email"];
    $password=$_REQUEST["pass"];
    $password1=$_REQUEST["pass1"];
    $dob=$_REQUEST["dob"];
    $number=$_REQUEST["num"];
    $address=$_REQUEST["address"];
    $address1=$_REQUEST["address1"];
    $term=$_REQUEST["term"];

    // $gender=$_REQUEST["myGender"];
    //First Name
    if(empty($name))
    {
        $validatename= "*Please insert first name";
    }
    else if(!preg_match("/^[a-zA-Z-' ]*$/",$name))
    {
      
         $validatename= "*first name must contain only alphabets";

    }
    else{
        $name=$_REQUEST["fname"];
        $x++;
    }
    //Last Namme
    if(empty($name1))
    {
        $validatename1= "*Please insert Last name";
    }
    else if (!preg_match("/^[a-zA-Z-' ]*$/",$name1))
    {
        $validatename1= "*last name must contain only alphabets";

    }
    else
    {
        $name1=$_REQUEST["lname"];
        $x++;
    }
        
 
//Email
$email=$_REQUEST["email"];
if(empty($email))
    {
        $validateemail="*you must enter your email";
    }
    elseif (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $validateemail="*you must enter valid email";
    }
    else
    {
        $email=$_REQUEST["email"];
        $x++;
    }
//Religion
$religion=$_REQUEST["religion"];
if(empty($religion))
{
    $validationreligion="*you must enter your religion";
}
else{
    $validationreligion= "";
}
//Age
$age=$_REQUEST["age"];
if(empty($age))
{
    $validationage="*you must enter your age";
}
else{
    $validationage= "your age saved";
}

if(empty($_REQUEST["cv"]))
{
    $validationfile="*you must enter your CV";
}
else{
    $validationfile= "";
}


// $password=$_REQUEST["pass"];
// if((strlen($_REQUEST["pass"])<6))
// {
//     $validationpass= "*your password must be 6 characters";

// }
// $password1=$_REQUEST["pass1"];
// if((strlen($_REQUEST["pass1"])<6))
// {
//     $validationpass1= "*your password must be 6 characters";

// }
//User name ,Password and Confirm Password
if(empty($uname))
    {
        $validationuname="*you must enter username";
    }
    else
    {
        $valid_set_user=$uname;
        $x++;
    }

    if(empty($password))
    {
        $validationpass="*you must enter your password";
    }
    else if(!empty($password) && strlen($password)<8)
    {
        $validationpass="*your password must be 8 characters";
    }
    else
    {
        $valid_set_pass=$password;
        $x++;
    }
  
    if($password1)
    {
        $valid_con_pass=$password1;
        $x++;
    }
    else
    {
        $validationpass1="*you must enter your confirm password";
    }

    if($password==$password1)
    {
        $valid_con_pass=$valid_con_pass;
        $x++;
        
    }
    else
    {
        $validationpass1="*password and confirm password must be same";
    }
    ///Date of Birth
$validationdob=$_REQUEST["dob"];
if($dob)
{
    $dob=$_REQUEST["dob"];
    $x++;
       
}
else
{
    $validationdob= "*please select your Date of Birth";
}
//Mobile Number
if(empty($number))
{
    $validationnum="*you must enter your mobile number";
} 
else if(!empty($number) && !preg_match("/^[0-9]*$/",$number))
    {
        $invalid_mobile="*mobile number must contain only numbers";
    }
    else{
        $number=$_REQUEST["num"];
        $x++;
    }
//Gender
if(isset($_REQUEST["myGender"]))
{
    $gender=$_REQUEST["myGender"];
    $x++;
}
else
{
    $validateradio= "*please select at least one radio";
}
//Marriage status
if(isset($_REQUEST["ms"]))
{

    $marriage_status=$_REQUEST["ms"];
    $validateradio1= "";
}
else
{
    $validateradio1= "*please select at least one radio";
}
//Previous Jpb Experience
if(isset($_REQUEST["exp"]))
{
    $exp=$_REQUEST["exp"];
    $validateradio2= "";
}
else
{
    $validateradio2= "*please select at least one radio";
}
//Present Address
$address=$_REQUEST["address"];
if($address)
    {
        $address=$_REQUEST["address"];
        $x++;
    }
    else
    {
        $validationaddress="*you must enter your address";
    }
//Permanent Address
$address1=$_REQUEST["address1"];
if($address1)
    {
        $address1=$_REQUEST["address1"];
        $x++;
    }
    else
    {
        $validationaddress1="*you must enter your address";
    }
//Uploading CV 
echo $_FILES["cv"]["name"];
if(move_uploaded_file($_FILES["cv"]["tmp_name"],"../uploads/" . $_FILES["cv"]["name"]))
{
    echo " file uploaded<br>";
}

else
{
    echo "uploading error";
    echo $_FILES["cv"]["error"];
}
//Preffered Language
// if(!isset($_REQUEST["java"])&&!isset($_REQUEST["php"])&&!isset($_REQUEST["cpp"]))
// {
//     $validationcb = "*please select the checkbox ";
// }  

// else
// {
//     if(isset($_REQUEST["java"]))
//     {
//         $v1= $_REQUEST["java"];
//         $validationcb =  $validationcb. ','.$_POST['java'];
        
//     }
//     if(isset($_REQUEST["php"]))
//     { 
//         $v2= $_REQUEST["php"];
//         $validationcb =  $validationcb. ','.$_POST['php'];
        
//     }
//     if(isset($_REQUEST["cpp"]))
//     {
//      $v3= $_REQUEST["cpp"];
//      $validationcb =  $validationcb. ','.$_POST['cpp'];
     
//     }
// }

if(empty($term))
    {
        $validationcb= " *please select the checkbox";
    }
    else{
        $term=$_REQUEST["term"];
        $x++;
    }
if($x==13)
{

//     $formdata = array(
//         'First Name'=> $name,
//         'Last Name'=> $name1,
//         'Age'=> $age,
//         // 'Gender'=> $_POST["myGender"],
//         "Date of Birth"=>$dob,
//         'Email'=>$email,
//         'User_name'=>$valid_set_user,
//         'Password'=>$valid_set_pass,
//         'Confirm Password'=>$valid_con_pass,
//         // $password=$_REQUEST["pass"];
//         // $password1=$_REQUEST["pass1"];
//         // 'Checkbox'=>$validationcb
        
//      );
//      $existingdata = file_get_contents('../data/data.json');
//      $tempJSONdata = json_decode($existingdata);
//      $tempJSONdata[] =$formdata;
//      //Convert updated array to JSON
     
//     $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
//      if(file_put_contents("../data/data.json", $jsondata)) 
//      {
//          //write json data into data.json file
//           echo "Registration successfully done <br>";
//         //   header("location:../view/managerlogin.php");
//      }
//      else 
//      {
//         echo "Not Registered";
//      }
        
    
//        // $data = file_get_contents("../data/data.json");
//        // $mydata = json_decode($data);
    
    
//         //  echo "my value: ".$mydata[1]->lastName;
//       // 	 foreach($mydata as $myobject)
//        // {
//        // foreach($myobject as $key=>$value)
//        // {
//        //   echo "your ".$key." is ".$value."<br>";
//       // } 
//        // }

    
//     }   //Get form data



//    else
//   {
//     echo "<br> Registration Failed !!!! Please give all the informations Properly <br>";
//   }
    $mydb=new db();
    $myconn=$mydb->opencon();
    $mydb->insertmanager($name,$name1,$age,$gender,$dob,$number,$marriage_status,$religion,$exp,$email,$address,$address1,$file,$valid_set_user,$valid_set_pass,$valid_con_pass,"manager",$myconn);

}


}

}
?>