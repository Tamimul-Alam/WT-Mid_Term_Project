
<?php include ("../control/manager_session.php") ?>
<?php include ("../control/manager_cookie.php") ?>


<html>
<head>
    <title>Ecommerece System</title>
    <link rel="stylesheet" type="text/css" href="../css/managerprofile.css">
    </head>

    <body>
        <form>
        <div class="header">
     <center>
      <h1>Welcome to your Managing Profile</h1>
     </center>
     </div>
     <div class="sticky">
        <div class="topnav">
        <a href="https://mail.google.com/mail/u/0/#inbox?compose=new" target="_blank">Contact With Users</a>
        <a href="#">About US</a>
        <a href="https://github.com/Tamimul-Alam" target="_blank">Github Profile</a>
        <a href= "https://www.udemy.com/" target="_blank">Education sites</a>
        <a href="manager_panel.php">Buyer Panel</a>
        <a href="manager_panel.php">Seller Panel</a>
        <a href="../control/logout.php">Logout</a>
        
        </div>
        </div>
    
     <div class="regibox">
     <h1 align ="center" >Manager Panel</h1>
     </div>
     <div class ="absolute">
     <div class="frame">
     </div> 
               
                
                    <br><br>
                <fieldset>
                    <!-- <div class="absolute"> -->
                <table>
                
                

                  <?php 
                   $servername="localhost";
                   $username="root";
                   $password="";
                   $dbname="ecommerce system";
                   $table="manager";
                   //create connection
                   $conn=new mysqli($servername,$username,$password,$dbname);
           
                  //connection check
                  if($conn->connect_error)
                  {
                  echo "error connecting database";
                   }
                   $sql="SELECT id,firstname,lastname,age,gender,dob,phone,marriage_status,religion,previous_job_exp,email,username FROM $table";
                   $res=$conn->query($sql);
                   if($res->num_rows>0){
                    
                    echo "<table border='2'>";
                    
                    echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Age</th><th>Gender</th><th>Date of birth</th><th>Phone number</th><th>Marriage status</th><th>religion</th><th>Previous_job_exp</th><th>E-mail</th><th>Username</th></tr>";
                    while ($row=$res->fetch_assoc()){
                        echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]."</td><td>".$row["lastname"].
                        "</td><td>".$row["age"]."</td><td>".$row["gender"]."</td><td>".$row["dob"]."</td><td>".$row["phone"]."</td><td>".$row["marriage_status"]."</td><td>".$row["religion"]."</td><td>".$row["previous_job_exp"]."</td><td>".$row["email"]."</td><td>".$row["username"]."</td><td>"."</td></tr>";
                    }
                    echo"</table>";
                    
                   }
                   else{echo"No Record found";}
                   ?>
                   <tr>
                   <td>
                   <p>Suggestions: <span id="txtHint"></span></p> 
                   <input type="text" name="delete" id="txt1" onkeyup="showHint(this.value)">
                   <input type="submit" class="button submit" name="delbtn" Value="Delete">
                   </td>
                   </tr>
                   <?php
                   $servername="localhost";
                   $username="root";
                   $password="";
                   $dbname="ecommerce system";
                   $table="manager";
                    //create connection
$conn=new mysqli($servername,$username,$password,$dbname);

//connection check
if($conn->connect_error){
   echo "error connecting database";
}

if(isset($_REQUEST['delbtn'])){
    $id=$_REQUEST['delete'];
    $sql="DELETE FROM $table WHERE id='$id'";
    if($conn->query($sql)){
        echo "Record deleted successfully";
    }
    

}
  ?>





                </table>
               
               
                

                <script src="../js/manager_reg_js_validation.js"></script>
        <!-- </div> -->
    </body>
    </form>
</html>
