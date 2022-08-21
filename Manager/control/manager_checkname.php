<?php

include("../model/manager_db.php");


$user=$_REQUEST["f_name"];
if(!empty($user)){
    $mydb=new db();
    $conn=$mydb->opencon();
    $result=$mydb->searchmanager($conn,"manager",$user);
    if($result->num_rows>0){
        echo "Manager Name Already Exist";
    }
    else{
        echo "Manager Name Available";
    }
}
?>
