<?php

?>
 <script type="text/javascript">
   function checkPass(){
     //Store the password field objects into variables ...
     var pass1 = document.getElementById("pass1");
     var pass2 = document.getElementById("pass2");
     //Store the Confimation Message Object ...
     var messages = document.getElementById("confirmMessage");

     //Set the colors we will be using ...
     var goodColor = "#66cc66";
     var badColor = "#ff6666";
     //Compare the values in the password field
     //and the confirmation field
     if(pass1.value == pass2.value){
     //The passwords match.
     //Set the color to the good color and inform
     //the user that they have entered the correct password
     if(pass1.value == "") {
       messages.innerHTML = "Password must not be blank!"
       contacts-form.pass1.focus();
     }
     else if(pass1.value.length < 6){
       messages.innerHTML = "Password must contain at least six characters!"
       contacts-form.pass1.focus();
     return false;}
     else{
       pass2.style.backgroundColor = goodColor;
       messages.style.color = goodColor;
       messages.innerHTML = "Passwords Match!"
     }
     }else{
     //The passwords do not match.
     //Set the color to the bad color and
     //notify the user.
     pass2.style.backgroundColor = badColor;
     messages.style.color = badColor;
     messages.innerHTML = "Passwords Do Not Match!"
     }
   }
 </script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/i18n/jquery-ui-i18n.min.js" ></script>
