<?php include_once("servtemp/analyticstracking.php") ?>
<?php ob_start(); ?>
<?php
  session_start();
  if(!isset($_SESSION['ID'])) {
  	header('Location: https://www.servmill.com/logged');
  }
	require("functions.php");
	require("htmls.php");
	headhtml();
?>
<title><?php
$memberid = $_SESSION['ID'];
$query = mysql_query("SELECT firstname, lastname FROM member WHERE memberid = '$memberid'") or die (mysql_error());
$row = mysql_fetch_array($query);
?><?php echo $row['firstname'];  ?> <?php echo $row['lastname']; ?> | Servmill</title>
</head>
<body style="background-image:url('https://www.servmill.com/acback.jpg');
background-size:cover;" >
<?php include 'servtemp/navigation.php'; ?>
<div class="crumb_navigation"> Navigation: <span class="current">home</span>/ <a href="https://www.servmill.com/categories" >categories</a>/ <a href="https://www.servmill.com/myaccount.php">account</a></div>
</br>
<div class="container">
    <div class="row">
      <div class="col-md-4">
       <div class="panel">
   	<div class="panel-body">
	<div class="thumbs">
	 <div id='showmsg'>
	  <span class="blue">
	    <a href="https://www.servmill.com/msgnotifications.php?id=0">
            Messages
            (<?php
	    $userid = $_SESSION['ID'];
            require 'connection.php';
            $q = "SELECT * FROM member where memberid='$userid'";
            $qr = $conn->prepare($q);
            $qr->execute();
            $fetc = $qr->fetchAll();
            foreach ($fetc as $row):
            $username = $row['userid'];
            endforeach;
	    $msgnum = mysql_query("SELECT * FROM msgnotifs WHERE(toid = '$username' AND status = 0)") or die(mysql_error());
						$counter = 0;
						WHILE($stat = mysql_fetch_array($msgnum)){ $counter++; }
						echo "$counter";
						?>)
						</a>
                             </span>
			  </div>
			</div>
			<div class="thumbs">
					<div id='shownotif'>
					 <span class="blue">
						<a href="https://www.servmill.com/notifications.php">Notifications(0)</a>
					</span>
			    </div>
			  </div>
			</div>
		      </div>

<!-- account details -->
<div class="panel">
<div class="panel-body">
<br>
<?php
            $userid = $_SESSION['ID'];
	    $query = mysql_query("SELECT * FROM member WHERE memberid = '$userid'") or die (mysql_error());
	    $row = mysql_fetch_array($query);
		$username = $row['userid'];
		$selleracc = $row['email'];
		$memberid = $row['memberid'];
		$servicelocation = $row['address'];
		if (!$row)
			{
				die("Error: Data not found..");
				echo $userid;
			}
if (isset($_POST['prodsave'])){
	$prodname=$_POST['servicename'];
	$startingbid=$_POST['startingcost'];
	$category=$_POST['category'];
	$descrpt=$_POST['descrpt'];

if ($startingbid > 10000){
			$fdate = time() + (31 * 24 * 60 * 60);
			$duedate = date('l,F d,Y',$fdate);
		} else{
			$fdate = time() + (14 * 24 * 60 * 60);
			$duedate = date('l,F d,Y',$fdate);
    }
	$datenow = date('l,F d,Y');
	$name = $_FILES["imagep"] ["name"];
	$type = $_FILES["imagep"] ["type"];
	$size = $_FILES["imagep"] ["size"];
	$temp = $_FILES["imagep"] ["tmp_name"];
	$error = $_FILES["imagep"] ["error"];

mysql_query("INSERT INTO services(servicename,categoryid,memberid,servicedescription,serviceimage,dateposted,status,sellername,sellerpayaccount,location)
VALUES ('$prodname','$category','$memberid','$descrpt','$name',CURRENT_TIMESTAMP,0,'$username','$selleracc','$servicelocation')") or die(mysql_error());
echo "<center><div class='alert alert-success'><strong>Success!</strong>Service has been posted successfully!</div></center><br>";
	if ($error > 0){
		die ("Error uploading file! Code $error.");
  }
	else
  {
		if($size > 1000000) //conditions for the file
		{
		die("Image is too big please choose less size image!");
		}
		else
		{
		move_uploaded_file($temp,"administrator/images/servmill/".$name);
		}
	}
}
?>

<?php echo "<center><img href='https://www.servmill.com/myaccount.php'  src='https://www.servmill.com/administrator/images/upload/servmilluser.png' width='200' height='200' alt='servmilluser'/></center>"; ?>
            	<center>
              <div class="one"><a href="#" >Edit personal</a></div>
              <div class="two"><a href="#">Update password or profile pic</a></div>
             <!-- <div class="three"><a href="#">View personal info</a></div> -->
              </center>
  </div>
</div>

<div class="">
  <div class="">
    <script type='text/javascript'>
	jQuery(document).ready( function() {

		jQuery('#regstep1').hide();
		jQuery('#form_row1').hide();
		jQuery('.one').click( function(){
			jQuery('#regstep1').toggle('fade');
			jQuery('.specifications').hide();
			jQuery('#form_row1').hide();
		});

		jQuery('.three').click( function() {
			jQuery('.specifications').toggle('fade');
			jQuery('#regstep1').hide('fade');
			jQuery('#form_row1').hide();
		});

		jQuery('.two').click( function() {
			jQuery('#form_row1').toggle('fade');
			jQuery('.specifications').hide('fade');
			jQuery('#regstep1').hide('fade');
		});

	});
</script>
      <div class="panel">
        <div class="panel-heading">User ID <?php echo $row['userid'];?></div>
         <div class="panel-body">
           <div class="specifications">
				Name: <span class="blue"><?php echo "".$row['firstname']." ".$row['lastname']."";?></span><br>
				Contact no: <span class="blue"><?php echo $row['contactno'];?></span><br>
				Address: <span class="blue"><?php echo $row['address'];?></span><br>
				Gender: <span class="blue"><?php echo $row['gender'];?></span><br>
				Email Address: <span class="blue"><?php echo $row['email'];?></span><br>
             </div>
			 <div id="regstep1">
				<?php
				if(isset($_POST['save']))
				{
				$last_save = $_POST['lname'];
				$fname_save = $_POST['fname'];
				$gender_save = $_POST['gender'];
				$address_save = $_POST['address'];
				$contact_save = $_POST['contactno'];
				$bday_save = $_POST['bday'];
				mysql_query("UPDATE member SET lastname='$last_save', firstname='$fname_save', contactno='$contact_save', gender='$gender_save', address='$address_save', birthdate='$bday_save' WHERE memberid='$userid'") or die (mysql_error());
				header("Location: https://www.servmill.com/myaccount.php");
				}
				?>

	<form action="" method="post" name="contacts-form" id="contacts-form">
              <label>Lastname:</label>
              <input type="text" class="form-control" name="lname" value="<?php echo $row['lastname']; ?>" required>
              <label>Firstname:</label>
              <input type="text" class="form-control" name="fname" value="<?php echo $row['firstname']; ?>" required>
              <label>Gender:</label>
                <select  class="form-control" name="gender">
			<option>Male</option>
                        <option>Female</option>
		</select>
            <label>Address:</label>
            <input type="text" class="form-control" name="address" value="<?php echo $row['address']; ?>"/>
            <label>Contact:</label>
            <input type="text" class="form-control" name="contactno" onKeyPress="return isNumberKey(event)" value="<?php echo $row['contactno']; ?>" required>
            <label>Birthdate: (DD/MM/YY)</label>
	    <input type="text" class="form-control" name="bday" value="<?php echo $row['birthdate']; ?>" required>
            <input type="submit" class="form-control btn-info" name="save" value="Save" required>
      </form>
      </div>

<div id="form_row1">
		  <?php
			if(isset($_POST['btnsave'])){
			$password_save = $_POST['pass1'];
			$name = $_FILES["image"] ["name"];
			$type = $_FILES["image"] ["type"];
			$size = $_FILES["image"] ["size"];
			$temp = $_FILES["image"] ["tmp_name"];
			$error = $_FILES["image"] ["error"];
			if ($error > 0){
				    die("Uploading file error! Code $error.");
                                }
				else
				{
					if($size > 1000000) //conditions for the file
					{
					die("Format is not allowed or file size is too big!");
					}
					else
					{
					move_uploaded_file($temp,"administrator/images/upload/".$name);
				}
			}
			mysql_query("UPDATE member SET password='$password_save', memberimg='$name' WHERE memberid='$userid'") or die(mysql_error());
			mysql_query("INSERT INTO member (memberimg) VALUES '$name' WHERE memberid='$userid'") or die(mysql_error());
			header("location: https://www.servmill.com/myaccount.php");
			}
			?>

        <form action="" method="post" enctype='multipart/form-data'>
        <input type="hidden" name="email1" id="email1" class="required email"/>
		<lable>Update account picture:</lable>
                <input type="file" name="image" required>
	        <label>Old password:</label>
              	<input class="form-control" type="text" name="loginid" id = "loginid" required>
              	<label>New password:</label>
              	<input class="form-control" type="password" name="pass1" id="pass1" class="required" onKeyUp="checkPass(); return false;" required>
              	<label>Confirm password:</label>
            	<input class="form-control" type="password" name="pass2" id="pass2" onkeyup="checkPass(); return false;"/><span id="confirmMessage" class="confirmMessage" required></span>
                <input class="form-control btn-info" type="submit" name="btnsave" value="Save"/>
</form>
        </div>
      </div>
    </div>
  </div>
 </div>
</div>
       <div class="col-lg-8">
                  <div class="panel">
                      <div class="panel-heading">
                        Post a service now:
                      </div>
                        <div class="panel-body">
                         <div class="row">
                          <form method="post" action="" enctype='multipart/form-data'>
				<div class="form-group">
                                  <label>Service title</label>
                                  <input type="text" class="form-control" name="servicename" required>
                                  <p class="help-block">give a title to your service.</p>

                                  <label>Service description</label>
                                  <textarea class="form-control" name="descrpt" rows="3"></textarea>

                                  <div class="form-group">
                                  <label>Uplode image</label>
                                  <input type="file" name="imagep">
                                  </div>

                                  <label>Service Category</label>
                                  <select name ="category" class="form-control" required>
                                    <?php cats(); ?>
                                  </select>

                                  <label>Service location</label>
                                  <input class="form-control" name="location" value="<?php echo $servicelocation ?>" required>
                                </div>

                              <button type="submit" name="prodsave" value="Post Service" class="btn btn-info">Post</button>
                              <button type="reset" class="btn btn-default">Reset</button>
                              </form>
                              <!-- /.col-lg-6 (nested) -->
                            </div>
                          <!-- /.row (nested) -->
                        </div>
                      <!-- /.panel-body -->
                    </div>
                  <!-- /.panel -->
    <?php hist(); ?>
   </div>
  </div>
 </div>
<?php footerservmill(); ?>
<!-- end of main content -->
<?php ob_end_flush(); ?>
