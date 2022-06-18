 <?php
include_once "../Controller/process_r.php"
?>


<html>
    <head>
        <h2>Seller Registration</h2> <hr> 
    </head>
    <body>
        <form action=""  method="post" enctype="multipart/form-data">
            <table>
              <tr>
                  <td> <label for="fname">First name:</label></td>
                  <td> <input type="text" id="fname" name="fname">
                  <?php
                  echo $fnameerr;
                  ?>
                   <label for="lname">Last name:</label> 
                  <input type="text" id="lname" name="lname">
                  <?php
                  echo $lnameerr;
                  ?></td>
                  
              </tr> 
              <tr>
                <td> <label for="DateOfBirth">Date Of Birth:</label> </td>
                <td> <input type="date" id="DateOfBirth" name="DateOfBirth"> 
                <?php
                  echo $DateOfBirtherr;
                  ?></td>
            </tr>
            <tr>
                <td> <label for="gender">Gender:</label> </td>
                <td><input type="radio" id="male" name="gender" value="Male">
                <label for="gender">Male</label>
                <input type="radio" id="female" name="gender" value="Female">
                <label for="gender">Female</label>
                <input type="radio" id="others" name="gender" value="others">
                <label for="gender">Others</label> 
                    <?php
                  echo $gendererr;
                  ?></td>
            </tr>
           
            <tr>
                <td> <label for="company">Shop Name:</label> </td>
                <td> <input type="text" id="company" name="company"> 
                <?php
                  echo $companyeerr;
                  ?></td>
           
            <tr>
                <td> <label for="email">Email:</label> </td>
                <td> <input type="text" id="email" name="email"> 
                <?php
                  echo $emailerr;
                  ?></td>
            </tr> 
           <tr>
              <td> <label for="password">Password:</label> </td>
              <td> <input type="password" id="password" name="password" > 
              <?php
                  echo $passerr;
                  ?></td>
          </tr> 
          <tr>
              <td> <label for="cpassword">Confirm Password:</label> </td>
              <td> <input type="password" id="cpassword" name="cpassword"> 
              <?php
                  echo $cpasserr;
                  ?></td>
          </tr> 
         
          </tr> 
          <tr>
                <td> <label for="phone">Phone:</label> </td>
                <td> <input type="tel" id="phone" name="phone"  pattern="^\d{11}$" > 
                <?php
                  echo $phoneerr;
                  ?></td>
         
</tr>
<tr>
                <td> <label for="address">Address:</label> </td>
                <td> <input type="text" id="address" name="address"   > 
                <?php
                  echo $adderr;
                  ?></td>
         
</tr>
          
          <td>Please submit your photo :</td>
         <td><input type="file" name="myfile">
             <?php
                  echo $fileerr;
                  ?></td>
          </tr>
 
          <tr>
          
          <td><label for="comment">Message (if any):</label></td>
         <td><textarea id="comment" name="comment" rows="4" cols="50"> </textarea>
             <?php
                  echo $comerr;
                  ?></td>
          </tr>

         <tr>
          <br>
            
        <td><input type="submit" name="Submit" value="Submit Form"></td>
</tr>
<tr>
      <td><td><h3>If you are already Registrated you can login, <a href="login.php">Click here!</a><h3></td></td>
       
</tr>


       <tr>
         <td>
         </td>
         <td>
         <?php
                  echo $dataerr;
                  ?>

         </td>


       </tr>
            </table>
        </form>

    </body>
</html>