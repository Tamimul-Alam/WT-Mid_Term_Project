<html>

    <body>
        <form>
                <fieldset>
                <h1 align="center">Managing Dashboard</h1></legend>
            
                </fieldset>
                
                    <br><br>
                <fieldset>
                    <div class="absolute">
                <table>
                <legend align="center"><h2>Manager Panel</h2></legend>
                

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
                   <input type="text" name="delete">
                   <input type="submit" name="delbtn" Value="Delete">
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
  <td><a href = "managerprofile.php">Back to Profile</a></td>
                </table>
                </fieldset>
               
                

        
        </div>
    </body>
    </form>
</html>