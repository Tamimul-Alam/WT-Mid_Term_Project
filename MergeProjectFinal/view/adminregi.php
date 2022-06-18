<?php include ("../control/adminreg_validate.php") ?>
<html>
<head>
    <title>Ecommerece System</title>
  </head>
  <body>
    <form action = "" method = "POST">
      <fieldset>
      <h2 align="center">Admin Registration Form</h2>
      </fieldset>

      <fieldset>
            <legend align = "center"><h3><i>Personal Information</i></h3></legend>

            <table align = "center" >
              <tr>
                <td>First Name:</td>
                <td><input type="text" name="admin_fname">
                <?php echo $invalid_fstname ; ?></td>
                
              </tr>

              <tr>
                <td>Last Name:</td>
                <td><input type="text" name="admin_lname">
                <?php echo $invalid_lstname ; ?></td>
                
              </tr>

              <tr>
                <td>Gender:</td>
                <td>
                  <input type="radio" name="gender" value="Male">Male
                  <input type="radio" name="gender" value="Female">Female
                  <?php echo $invalid_gender ; ?>
                </td>
              </tr>

              <tr>
                <td>Religion:</td>
                <td><select name = "religion" id = "religion">
                  <option value = "0">Select</option> 
                  <option value = "Islam">Islam</option>
                  <option value = "Hindu">Hindu</option>
                  <option value = "Cristian">Cristian</option>
                  <option value = "Buddist">Buddist</option>
                  
                </select><?php echo $invalid_religion ; ?></td>
              </tr>

              <tr>
                <td>Nationality:</td>
                <td><input type="text" name="admin_natnlty" placeholder = "eg. Bangladeshi">
                <?php echo $invalid_nationlty ; ?></td>
              </tr>

              <tr>
                <td>Email:</td>
                <td><input type="email" name="admin_email" placeholder = "eg. name@yahoo.com">
                <?php echo $invalid_email ; ?>
              </td>
              </tr>

              <tr>
                <td>Phone Number:</td>
                <td><input type="text" name="admin_phnnum" placeholder = "eg. 01X-XXXXXXXX">
                <?php echo $invalid_phnnum ; ?>
              </td>
              </tr>

              <tr>
                <td>Date of Birth:</td>
                <td><input type="date" name="admin_dob">
                <?php echo $invalid_dob ; ?>
              </td>
              </tr>

              <tr>
                <td>Address:</td>
                <td><textarea id = "address" name="address" rows = "4" cols = "40" ></textarea>
                <?php echo $invalid_address ; ?>
              </td>
              </tr>

            </table>
      </fieldset>
      <br><br>

      <fieldset>
      <legend align = "center"><h3><i>Login Information</i></h3></legend>
      <table align = "center" >
              <tr>
                <td>User Name:</td>
                <td><input type="text" name="admin_set_uname" placeholder="User Name">
                <?php echo $invalid_set_uname ; ?>
              </td>
              </tr>

              <tr>
                <td>Password:</td>
                <td><input type="password" name="admin_set_pass" placeholder="Password">
                <?php echo $invalid_set_pass ; ?>
              </td>
              </tr>

              <tr>
                <td>Confirm Password:</td>
                <td><input type="password" name="admin_conifrm_pass" placeholder="Confirm Password">
                <?php echo $invalid_confrm_pass ; ?>
              </td>
              </tr>

              <tr>
                <td>
                  <input type = "submit" name = "submit" value = "Register">
                  <input type = "reset" name = "reset" value = "Reset">
                </td>
              </tr>

              <tr>
                <td> <a href = "adminlogin.php">Already have an account? Login</a>
              </tr>
            </table>
      </fieldset>
  </body>
</html>
 