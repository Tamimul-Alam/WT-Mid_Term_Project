<?php
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
$v1=$v2=$v3="";
$name=$name1=$uname=$age=$dob=$number=$address=$religion=$address1=$email=$exp=$marriage_status=$file=$gender="";
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
    // $gender=$_REQUEST["myGender"];
    
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
        
 

$email=$_REQUEST["email"];
if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $validateemail="*you must enter email";
}
else{
    $validateemail= "your email saved";
}
$religion=$_REQUEST["religion"];
if(empty($religion))
{
    $validationreligion="*you must enter your religion";
}
else{
    $validationage= "";
}
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
if(empty($uname))
    {
        $validationuname="*you must enter username";
    }
    else
    {
        $uname=$_REQUEST["user"];
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
        $password=$_REQUEST["pass"];
    }
  
    if($password1)
    {
        $password1=$_REQUEST["pass1"];
    }
    else
    {
        $validationpass1="*you must enter your confirm password";
    }

    if($password==$password1)
    {
        $password1=$password1;
        
    }
    else
    {
        $validationpass1="*password and confirm password must be same";
    }
$validationdob=$_REQUEST["dob"];
if(empty($_REQUEST["dob"]))
{
    $validationdob= "*please select your Date of Birth";   
}
else
{
    $validationdob="";
}

if(empty($number))
{
    $validationnum="*you must enter your mobile number";
} 
else 
{
    if((!preg_match("/^[0-9]*$/",$number)))
    $validationnum="*Invalid number";
}

if(isset($_REQUEST["myGender"]))
{
    $gender=$_REQUEST["myGender"];
}
else
{
    $validateradio= "*please select at least one radio";
}
if(isset($_REQUEST["ms"]))
{
    $validateradio1= "";
}
else
{
    $validateradio1= "*please select at least one radio";
}
if(isset($_REQUEST["exp"]))
{
    $validateradio2= "";
}
else
{
    $validateradio2= "*please select at least one radio";
}
$address=$_REQUEST["address"];
if(empty($address))
{
    $validationaddress="*you must enter your present address";
} 
$address1=$_REQUEST["address1"];
if(empty($address1))
{
    $validationaddress1="*you must enter your permanent address";
} 
echo $_FILES["cv"]["name"];
if(move_uploaded_file($_FILES["cv"]["tmp_name"],"../uploads/" . $_FILES["cv"]["name"]))
{
    echo " file uploaded";
}

else
{
    echo "uploading error";
    echo $_FILES["cv"]["error"];
}

if(!isset($_REQUEST["java"])&&!isset($_REQUEST["php"])&&!isset($_REQUEST["cpp"]))
{
    $validationcb = "*please select at least one checkbox ";
}  

else
{
    if(isset($_REQUEST["java"]))
    {
        $v1= $_REQUEST["java"];
        $validationcb =  $validationcb. ','.$_POST['java'];
        
    }
    if(isset($_REQUEST["php"]))
    { 
        $v2= $_REQUEST["php"];
        $validationcb =  $validationcb. ','.$_POST['php'];
        
    }
    if(isset($_REQUEST["cpp"]))
    {
     $v3= $_REQUEST["cpp"];
     $validationcb =  $validationcb. ','.$_POST['cpp'];
     
    }
}

//Get form data
$formdata = array(
    'First Name'=> $_POST["fname"],
    'Last Name'=> $_POST["lname"],
    'Age'=> $_POST["age"],
    // 'Gender'=> $_POST["myGender"],
    "Date of Birth"=>$_POST["dob"],
    'Email'=>$_POST["email"],
    'Checkbox'=>$validationcb
    
 );
 $existingdata = file_get_contents('../data/data.json');
 $tempJSONdata = json_decode($existingdata);
 $tempJSONdata[] =$formdata;
 //Convert updated array to JSON
 
$jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
 if(file_put_contents("../data/data.json", $jsondata)) {
     //write json data into data.json file
      echo "Data successfully saved <br>";
  }
 else 
      echo "no data saved";

$data = file_get_contents("../data/data.json");
$mydata = json_decode($data);


//  echo "my value: ".$mydata[1]->lastName;
// 	 foreach($mydata as $myobject)
// {
// foreach($myobject as $key=>$value)
// {
//   echo "your ".$key." is ".$value."<br>";
// } 
// }

}
}

?>