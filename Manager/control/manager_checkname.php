<?php

include("../model/manager_db.php");

$userna=$_REQUEST["usern"];
if(!empty($userna)){
    $mydb=new db();
    $conn=$mydb->opencon();
    $result=$mydb->searchmanager($conn,"manager",$userna);
    if($result->num_rows>0){
        echo "Manager Name Already Exist";
    }
    else{
        echo "Manager Name Available";
    }
}
?>
