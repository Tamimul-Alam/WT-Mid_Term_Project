<?php
$ptittle=$des=$price=$brand="";
$ptittleerr=$deserr=$priceerr=$branderr=$catagoryerr=$fileerr=$dataperr="";
$count=0;

if(isset($_POST["Submit"])){
 
$ptittle=$_POST["ptittle"];

if(empty($ptittle)){

    $ptittleerr= "->please fill";

}
else{
    $count++;
    $ptittleerr="->your product tittle is ".$ptittle;
}

$des=$_POST["description"];

if(empty($des)){

$deserr="->please fill";

}
else{
    $count++;
    //$deserr="->your  ".$des;
}
$price=$_POST["price"];

if(empty($price)){

$priceerr= "->please fill this information";

}
else{
    $count++;
    $priceerr="->your product price is ".$price;
}

$brand=$_POST["brand"];
if(empty($brand)){

    $branderr= "->please enter the brand";
    
    }
    else{
        $count++;
        $branderr="-> Brand name is ".$brand;
    }
    if(isset($_POST["catagory"])){
        $count++;
        $catagoryerr="-> you have selected ".$_POST["catagory"];
    }
    else{
        $catagoryerr="->you have not selected any catagory";
    }

  
/*
if ($_FILES["myfile"]["type"]=="image/jpeg" ){
if(move_uploaded_file($_FILES["myfile"]["tmp_name"], "../File/".$fname.date("Y-m-d").".jpg")){
    $count++;
    $fileerr="->you have selected ".$_FILES["myfile"]["name"];
    
}
else{
    $fileerr="->please choose a jpg file under 6mb";
}
}
else{
    $fileerr="->please choose a jpg file under 6mb";
}*/
$total = count($_FILES['upload']['name']);

// Loop through each file
for( $i=0 ; $i < $total ; $i++ ) {

  //Get the temp file path
  $tmpFilePath = $_FILES['upload']['tmp_name'][$i];

  //Make sure we have a file path
  if ($tmpFilePath != ""){
    //Setup our new file path
    $newFilePath = "../File/" . $_FILES['upload']['name'][$i];

    //Upload the file into the temp dir
    if(move_uploaded_file($tmpFilePath, $newFilePath)) {

      //Handle other code here

    }
  }
}




if($count==5){
   $formdata=array(
    
    'Product_tittle'=>$ptittle,
    'Full_description'=>$des,
    'Pricing'=>$price,
    'Brand_name'=>$brand,
    'Catagory'=>$_POST["catagory"]
      

   );
  
   $existingdata=file_get_contents('../Data/data_p.json');
  // $existingdata = file_get_contents('data.json');
   $tempJSONdata = json_decode($existingdata);
   $formdata['ID'] = count($tempJSONdata) + 1;
   $tempJSONdata[] = $formdata;
   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
   if(file_put_contents("../Data/data_p.json", $jsondata)) {
    $dataperr= "Product info successfully saved <br>";
}
else {
    $dataperr= "No data saved";
}

}


}

?>