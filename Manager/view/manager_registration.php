<?php include "../control/process.php"; ?>


<html>
<head>
    <title>Ecommerece System</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/reg_css.css">
    </head>

     <body>
     <p id="ajaxresponse"></p>

     <form action="" method="post" enctype="multipart/form-data">
     <div class="header">
     <center>
      <h1>Manager Registration Form</h1>
     </center>
     </div>
    
     <div class="regibox">
     <h1 align ="center" >Personal Information</h1>
  </div>
  <div class ="absolute">
  <div class="frame">
  </div> 
        <table align = "center" >
            <tr>
            <td>First Name :</td>
            <td><input type="text" name="fname" id="f_name" onkeyup="fnamecheck()"  placeholder=" First name ">
            <label id="fnameerror"></label>
            <?php echo $validatename; ?>
            </td>
            </tr>
            <tr>
            <td>Last Name :</td>
            <td><input type="name" name="lname" id="l_name" onkeyup="lnamecheck()"  placeholder=" Last name " >
            <label id="lnameerror"></label>
            <?php echo $validatename1; ?></td>
            </tr>
            <tr>
            <td>Age :</td>
            <td><input type="number" name="age" id="Age"onkeyup="agecheck()" >
            <label id="ageerror"></label>
            <?php echo $validationage; ?></td>
            </tr>
            <tr>
            <td>Gender :</td>
            <td>
            Male <input type="radio" name="myGender"  id="M" onclick="checkgender()" value="male">
            Female <input type="radio" name="myGender"value="female" id="F" onclick="checkgender()">
            Other <input type="radio" name="myGender"value="other" id="other" onclick="checkgender()">
            <label id="radioerror"></label>
            <?php echo $validateradio; ?>
            </td> 
            </tr>
            <td>Date of birth :</td>
            <td><input type="date" name="dob"><?php echo $validationdob; ?></td>
            </tr>
            <tr>
            <td>Phone :</td>
            <td><input type="tel" name="num"placeholder="01X-XXXXXXXX" id="mob" onkeyup="checkmobile()" >
            <label id="Mobilerror"></label>
            <?php echo $validationnum; ?></td>
            </tr>
            
            <tr>
            <td>Marriage status:</td>
            <td>
            Married<input type="radio" name="ms" value=" married">
            Unmarried <input type="radio" name="ms"value=" unmarried">
            <?php echo $validateradio1; ?>
            </td> 
            <tr>
                <td>Religion:</td>
                <td><select name = "religion" id = "religion">
                  <option value = "0">Select</option>
                  <option value = "Islam">Islam</option>
                  <option value = "Hindu">Hindu</option>
                  <option value = "Cristian">Cristian</option>
                  <option value = "Buddist">Buddist</option>
                </select>
                <?php echo $validationreligion; ?>
            </td>
            </tr>
            <tr>
            <td>Previous job expreience :</td>    
            <td>
            <input type="radio" name="exp" value="1-2"> 1-2<br>
            <input type="radio" name="exp"value="2-3"> 2-3<br>
            <input type="radio" name="exp"value="More than 3 years">More than 3 years<br>
            <?php echo $validateradio2; ?>
            </td> 
            </tr>
            <tr>
            <td>Email :</td>
            <td><input type="email" name="email" placeholder=" example@gmail.com " id="mail" onkeyup="checkemail()" >
            <label id="emailerror"></label> 
            <?php echo $validateemail; ?></td>
            </tr>
            <tr>
            <td>Present Address :</td>
            <td> <textarea name="address" rows="4" cols="40" placeholder="eg. Sector no./district/Bangladesh."></textarea><?php echo $validationaddress; ?></td>
            </tr>
            <td>Permanent Address :</td>
            <td> <textarea name="address1" rows="4" cols="40" placeholder="eg. Sector no./district/Bangladesh."></textarea><?php echo $validationaddress1; ?></td>
            </tr>
            
            <tr>
            <td>Please upload your CV :</td>
            <td><input type="file" name="cv" id="f1" onclick="checkfile()"> 
            <label id="fileerror"></label>
            <?php echo $validationfile; ?></td>
            </tr>
            
            </table>
            </div>
            
            <div class="regibox">
            
               <h1 align ="center" >Login Information</h1>
               </div>
               <div class ="absolute">
               <div class="frame">
               </div> 
            <table align = "center" >
            <tr>
            <td>User Name :</td>
            <td><input type="text" name="user"  placeholder="User Name" id="usern" onkeyup="checkusername()">
            <label id="nameerror"></label>
            <?php echo $validationuname; ?></td>
            </tr>

            <tr>
            <td>Password :</td>
            <td><input type="password" name="pass" placeholder="Password" id="pass1" onkeyup="checkpass()" >
            <input type="checkbox" id="showpass">Show Password</input>  
            <p id="passerror"></p>
            <?php echo $validationpass; ?>
          </td>
            </tr>

            <tr>
            <td>Confirm Password :</td>
            <td><input type="password" name="pass1" placeholder="Confirm Password" id="cpass"  onkeyup="checkconpass()" >
            <input type="checkbox" id="showpass2">Show Password</input> 
            <p id="conpasserror"></p>
            <?php echo $validationpass1; ?></td>
            </tr>
            <tr>
            <!-- <td>Preffered Language :</td> -->
            <td>
             <input type="checkbox" name="term">
             I have read and accept the <a href="terms.php" name="terms"> Terms of service</a> & <a href="privacy.php" name="privacy">Privacy Policy</a>
             <?php echo $validationcb; ?>
             
            
            </td>   
            </tr>
            <table align ="center">
            <tr>
            <td id="sub">
            <input type="submit" class="button submit" name="submit" value="Register">
            </td>
            <td id="res">
            <input type="reset"class="button reset" value="Reset"> 
            
            </tr>
            </td>
            <tr>
            <td><a href = "managerlogin.php">Already have an account? Login</a></td>
            
            </tr>
            </table>
            </table>
            </div>
            </fieldset>
            </form>
            <script src="../js/manager_reg_js_validation.js"></script>    
    </body>
    
    </html>