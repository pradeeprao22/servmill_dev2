<?php ob_start(); ?>

<?php
  session_start();
	require("functions.php");
	require("htmls.php");
	headhtml();
  $loggid = $_SESSION['logged'];
?>

<?php include 'servtemp/navigation.php'; ?>
</br>
<div class="container">

<?php

  $dbc = mysqli_connect('localhost', 'root' , 'myrootservpub@123', 'servmill') OR die ('Some Error Occured Because : '.mysqli_connect_error());

  if(isset($_POST['submitted']) ==1 ){

  $q = "INSERT INTO gadgetdataform (name, email, address, contactnumber, dateandtime, serviceprovider, deviceinformation, devicecategory, faultdescription)

  VALUES ('$_POST[name]','$_POST[email]','$_POST[address]','$_POST[contactnumber]','NOW()',
  '$_POST[serviceprovider]','$_POST[deviceinformation]','$_POST[devicecategory]','$_POST[faultdescription]')";

  $r = mysqli_query($dbc, $q);

  	if($r){

  		echo'<div class="alert alert-success" role="alert">Provider details has been submitted <strong>Successfully!</strong></div>';
  	} else {
  		echo '<p>Your not added:'.mysqli_error($dbc);
  	    echo'<p>'.$q.'</p>';
  	 }
  		}
  ?>
  <form id="GadgetForm" data-toggle="validator" method="post" role="form">
          <div class="form-group">
           <div class="row">
                              <div class="col-xs-4">
                  <label class="control-label">Provider Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter name" required>
                  </div>
                              <div class="col-xs-4">
                  <label class="control-label">Provider Email</label>
                  <input type="text" class="form-control" name="email" placeholder="Enter email address" required>
                  </div>
            </div>
           </div>
  <div class="form-group">
          <div class="row">
              <div class="col-xs-4">
                  <label class="control-label">Provider Contact Number</label>
                  <input type="tel" class="form-control" data-maxlength="10" name="contactnumber" placeholder="Mobile number or Phone number" required>
              </div>
          </div>
      </div>

      <div class="form-group">
          <div class="row">
              <div class="col-xs-6">
                  <label class="control-label">Provider Address</label>
                  <input type="text" class="form-control" name="address" placeholder="Enter address" required>
              </div>
              <div class="col-xs-6">
                  <label class="control-label">Remarks</label>
                  <input type="text" class="form-control" data-maxlength="50" name="remarks" placeholder="Anything you want to specify" >
              </div>
          </div>
      </div>

      <div class="form-group">
          <div class="row">
              <div class="col-xs-4 selectContainer">
                  <label class="control-label">Service Category</label>
                  <select class="form-control" name="devicecategory" required>
                      <option value="">Choose a Category</option>
                      <option value="cardio">Cardio Training</option>
                      <option value="yoga">Yoga Pilates</option>
                      <option value="power">Power Training</option>
                      <option value="desktop">Desktop and Laptop</option>
                      <option value="electronics">Electronics</option>
                      <option value="beauty">Beauty service</option>
                      <option value="mobile">Mobiles</option>
                      <option value="dietitian">Dietitian</option>
                      <option value="plumbing">Plumbing</option>
                      <option value="home">Home cleaning</option>
                      <option value="vechile">Vechile service</option>
                      <option value="tailor">Tailor</option>
                  </select>
              </div>
          </div>
      </div>

      <div class="form-group">
          <label class="control-label">Service Provider Description  </label>
          <!--<input type="text" class="form-control" rows="8" name="faultdescription" required>-->
          <textarea class="form-control" name="faultdescription" rows="6" placeholder="Fault according to you"> </textarea>
      </div>
     <button type="submit" class="btn btn-default">Submit details</button>
     <input type="hidden" name="submitted" value="1" />
  </form>
   </div>
<?php foothtml(); ?>
<!--end of main content-->
<?php ob_end_flush();	?>
