<?php ob_start(); ?>
<?php
session_start();
if($_SESSION['isvalid'] != "true"){
  header("location:index.php");
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Servmill-Administrator</title>
	<link type="text/css" href="css/style.css" rel="stylesheet" />
<?php include '../css.php'; ?>
		<meta charset="UTF-8">
</head>
<body>
  <div class="row">
         <div class="col-md-12">
         <h4>Servmill Users</h4>
         <div class="table-responsive">
               <table id="mytable" class="table table-bordred table-striped">
                    <thead>
                    <th><input type="checkbox" id="checkall" /></th>
                     <th>User ID</th>
                     <th>Name</th>
                      <th>Email</th>
                      <th>Location</th>
                      <th>Mobile Number</th>
                      <th>Delete</th>
                    </thead>
<tbody>
       <?php
         function cats(){
            require("db.php");
         		$query = mysql_query("SELECT * FROM `member`") or die (mysql_error());
         		while($row = mysql_fetch_array($query)){
         				echo "<tr>
                       <td><input type='checkbox' class='checkthis' /></td>
                       <td>".$row['memberid']."</td>
                       <td>".$row['firstname']."</td>
                       <td>".$row['email']."</td>
                       <td>".$row['address']."</td>
                       <td>".$row['contactno']."</td>
                       <td><p data-placement='top' data-toggle='tooltip' title='Edit'><button class='btn btn-primary btn-xs' data-title='Edit' data-toggle='modal' data-target='#edit' ><span class='glyphicon glyphicon-pencil'></span></button></p></td>
                       <td><p data-placement='top' data-toggle='tooltip' title='Delete'><button class='btn btn-danger btn-xs' data-title='Delete' data-toggle='modal' data-target='delete' ><span class='glyphicon glyphicon-trash'></span></button></p></td>
                       </tr>";
         		}
         }
        ?>
        <?php cats(); ?>
</tbody>
  </div>
  </div>
  </div>
</body>
</html>
<?php ob_end_flush();	?>
