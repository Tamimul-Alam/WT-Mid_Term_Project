function fnamecheck() {

    var fnameval=document.getElementById("f_name").value;

    if(fnameval.length<5 || !isNaN(fnameval)){
        document.getElementById("fnameerror").innerHTML="First Name Should be contain 5 characters";
        return false;
    }
    
    else if(!fnameval.startsWith(fnameval.charAt(0).toUpperCase())){
        document.getElementById("fnameerror").innerHTML="First Name should be Start with Capital Letter ";
        return false;
    }
    else{
        document.getElementById("fnameerror").innerHTML="First Name is  correct";
        return true;
      
    }
}
function lnamecheck() {

    var lnameval=document.getElementById("l_name").value;
    if(lnameval.length<3 || !isNaN(lnameval)){
        document.getElementById("lnameerror").innerHTML="Last Name Should be contain 3 characters";
        return false;
    }
    else if(!lnameval.startsWith(lnameval.charAt(0).toUpperCase())){
        document.getElementById("lnameerror").innerHTML="Last Name should be Start with Capital Letter";
        return false;
    }
    else{
        document.getElementById("lnameerror").innerHTML="Last Name is correct";
        return true;
   
    }

}
function agecheck() {
    var age_regex =/^\d{2}$/;
    var ageval=document.getElementById("Age").value;
  
     //if age matches return true
      if(ageval.match(age_regex) && ageval!="" && ageval>=18){
          document.getElementById("ageerror").innerHTML="Age is acceptable";
          return true;
      
      }
      
      else if(ageval==""){
          document.getElementById("ageerror").innerHTML="Age cannot be empty";
          return false;
      }
      else{
          document.getElementById("ageerror").innerHTML="Your age should be above 18";
          return false;
      }
  
  }
  function checkgender() {
    if (document.getElementById("M").checked == true) {
      document.getElementById("radioerror").innerHTML = "Male is checked";
      return true;
   
    } else if (document.getElementById("F").checked == true) {
      document.getElementById("radioerror").innerHTML = "Female is checked";
      return true;
  
    } else if (document.getElementById("other").checked == true) {
      document.getElementById("radioerror").innerHTML = "Others is checked";
      return true;
  
    } else {
      document.getElementById("radioerror").innerHTML =
        "Please select a radioButton";
      return false;
    }
  }

  function checkmobile() {
    var mobileval=document.getElementById("mob").value;
    if(mobileval.length>=11 && !mobileval==""){
        document.getElementById("Mobilerror").innerHTML="Mobile number is correct";
        return true;
    
    }
    //cannot start with +88
    else if(mobileval.startsWith("+88")){
        document.getElementById("Mobilerror").innerHTML="Mobile number cannot start with +88";
        return false;
    }
    else{
        document.getElementById("Mobilerror").innerHTML="Mobile number is not correct";
        return false;
    }


}
function checkemail() {
    var email_regex =/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;
    var email_regex_edu = /^w+([-+.']w+)*@[A-Za-zd]+.edu$/;
    
    var emailval=document.getElementById("mail").value;
    if(emailval.match(email_regex) || emailval.match(email_regex_edu)){
      document.getElementById("emailerror").innerHTML="Email is correct";
      return true;
  
    }
    else if(emailval==""){
      document.getElementById("emailerror").innerHTML="Email cannot be empty";
      return false;
    }
  
    else{
      document.getElementById("emailerror").innerHTML="Email is not correct";
      return false;
    }
  }
  function checkusername() {
    var userval=document.getElementById("usern").value;
    //check if admin name is empty
    if(userval==""){
        document.getElementById("nameerror").innerHTML="Username cannot be empty";
        return false;
    }
    else{
        document.getElementById("nameerror").innerHTML="Username is correct";
        return true;
 
    }

}
function checkpass() {
    
    var passval=document.getElementById("pass1").value;
    if(passval.length>=8 && passval!=""){
      document.getElementById("passerror").innerHTML="Password is correct";
      return true;
    }
    //check password is empty
      else if(passval==""){
          document.getElementById("passerror").innerHTML="Password cannot be empty";
          return false;
      }
  
    else{
      document.getElementById("passerror").innerHTML="Password must contain at least 8 character";
      return false;
    }
  }
  function checkconpass() {
    //check if password is same as confirm password
    var passval=document.getElementById("pass1").value;
    var conpassval=document.getElementById("cpass").value;
    if(passval==conpassval){
        document.getElementById("conpasserror").innerHTML="Password Matched";
        return true;
    }
    else if(conpassval==""){
        document.getElementById("conpasserror").innerHTML="Confirm Password cannot be empty";
        return false;
    }
    else{
        document.getElementById("conpasserror").innerHTML="Password is not Matched! Try Again!";
        return false;
    }

}
function checkfile() {
    var file_regex =/^.*\.(pdf)$/;
    var fileval=document.getElementById("f1").value;
    if(fileval.match(file_regex) && fileval!=""){
      document.getElementById("fileerror").innerHTML="File is correct";
      return true;
    }
    else if(fileval==""){
      document.getElementById("fileerror").innerHTML="File cannot be empty";
      return false;
    }
    else{
      document.getElementById("fileerror").innerHTML="File should be PDF Format";
      return false;
    }
  }

  //ajax for Username
function myAJAXname(){
    //aplly ajax on username
    var userval=document.getElementById("usern").value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("ajaxresponse").innerHTML = this.responseText;
      }
    };
    xhttp.open("POST", "http://localhost/Manager/control/manager_checkname.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("manger="+userval);
  
   
  
      
  }
//jquery for Showing Password
  $(document).ready(function(){
    $('#showpass').click(function(){
      var x=$('#pass1');
      var y=x.attr('type');
      if(y=='password'){
        x.attr('type','text');
        $(this).text('Hide Password');
      }
      else{
        x.attr('type','password');
        $(this).text('Show Password');
      }
    });
  });
  
  $(document).ready(function(){
    $('#showpass2').click(function(){
      var x=$('#cpass');
      var y=x.attr('type');
      if(y=='password'){
        x.attr('type','text');
        $(this).text('Hide Password');
      }
      else{
        x.attr('type','password');
        $(this).text('Show Password');
      }
    });
  });
  