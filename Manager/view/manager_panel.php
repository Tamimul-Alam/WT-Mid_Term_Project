<html>
<head>
    <title>E-commerce system</title>
<link rel="stylesheet" type="text/css" href="../css/manager_panel.css">
</head>
    <body>
        
        <form>
        <div class="header">
        <center>
        <h1>Buyer Dashboad</h1>
        </center>
        </div>   
        <div class="regibox">
        <h1 align ="center" >Buyer Panel</h1>
        </div>
        <div class ="absolute">
        <div class="frame">
        </div>
        <table>
        <br><br>
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
                   $sql="SELECT id,firstname,lastname,age,gender,dob,phone,religion,email,username,password,com_password FROM $table";
                   $res=$conn->query($sql);
                   if($res->num_rows>0){
                    
                    echo "<table border='2'>";
                    
                    echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Age</th><th>Gender</th><th>Date of birth</th><th>Phone number</th><th>religion</th><th>E-mail</th><th>Username</th><th>Password</th><th>Confirm Password</th></tr>";
                    while ($row=$res->fetch_assoc()){
                        echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]."</td><td>".$row["lastname"].
                        "</td><td>".$row["age"]."</td><td>".$row["gender"]."</td><td>".$row["dob"]."</td><td>".$row["phone"]."</td><td>".$row["religion"]."</td><td>".$row["email"]."</td><td>".$row["username"]."</td><td>".$row["password"]."</td><td>".$row["com_password"]."</td><td>"."</td></tr>";
                    }
                    echo"</table>";
                    
                    
                   }
                   else{echo"No Record found";}
                   ?>
                   <br>
                   <tr>
                   <td>
                   <input type="text" name="delete">
                   <input type="submit" class="button submit"  name="delbtn" Value="Delete">
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

if(isset($_POST['delbtn'])){
    $id=$_POST['delete'];
    $sql="DELETE FROM $table WHERE id='$id'";
    if($conn->query($sql)){
        echo "Record deleted successfully";
    }
    

}

  ?>
  <br><br>
                <tr><td><a href = "managerprofile.php">Back to Profile</a></td></tr>
                </table>
                
               
                

        
        </div>
    </body>
    </form>
</html>