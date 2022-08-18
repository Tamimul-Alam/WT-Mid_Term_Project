<?php
class db{
    function opencon(){
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="ecommerce system";
        //create connection
$conn=new mysqli($servername,$username,$password,$dbname);

//connection check
if($conn->connect_error){
    echo "error connecting database";
}
return $conn;
    }
 function insertmanager($fname,$lname,$age,$myGender,$dob,$num,$ms,$religion,$exp,$email,$address,$address1,$cv,$user,$pass,$pass1,$table,$conn){

        
        $sqlstr="INSERT into $table(firstname,lastname,age,gender,dob,phone,marriage_status,religion,previous_job_exp,email,present_address,Permanent_address,CV,username,password,com_password) VALUES ('$fname','$lname','$age','$myGender','$dob','$num','$ms','$religion','$exp','$email','$address','$address1','$cv','$user','$pass','$pass1')";
        if($conn->query($sqlstr)){
           
            header("Location:../view/managerlogin.php");
        }
        else{
            echo "cannot insert Because of the error =".$conn->error;//error debug using this property
        }
            }
        
            
        function checklogin($conn,$tablename,$admin_name,$password){
            $sqlstr="SELECT admin_name,Password FROM $tablename WHERE admin_name='$admin_name' AND Password='$password'";
            return $conn->query($sqlstr);
    
        }
        function searchadmin($conn,$tablename,$adminname){
            $sqlstr="SELECT * FROM $tablename WHERE admin_name='$adminname'";
            return $conn->query($sqlstr);
        }
        function searchadminemail($conn,$tablename,$adminemail){
            $sqlstr="SELECT * FROM $tablename WHERE email='$adminemail'";
            return $conn->query($sqlstr);
        }
        function Updateprofile($conn,$tablename,$admin_email,$password,$confirm_password){
        
            $sqlstr="UPDATE $tablename SET password='$password',confirm_password='$confirm_password'  WHERE email='$admin_email'";
            return $conn->query($sqlstr);
        }
        
        function Deleteadmin($conn,$tablename,$admin_name){
            $sqlstr="DELETE FROM $tablename WHERE admin_name='$admin_name'";
            return $conn->query($sqlstr);
        }
       
        function connclose($conn){
            return $conn->close();
        }
        


        

        


    }    
        



?>