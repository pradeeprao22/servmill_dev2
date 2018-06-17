<?php ob_start(); ?>
<?php
  session_start();
if(!isset($_SESSION['ID'])) {
        header('Location: https://www.servmill.com/logged');
  }
	require("functions.php");
	require("htmls.php");
	headhtml();
  $userid = $_SESSION['ID'];
?>
<?php include 'servtemp/navigation.php'; ?>
<div class="crumb_navigation">Navigation:<a href="https://www.servmill.com/myhome">home</a> / <span class="current">notification</span></div>
<br/>
<?php include_once("servtemp/analyticstracking.php") ?>
<style>
/* notification style */
.notification-list, .n-user-list {
    list-style: outside none none;
    margin: 0;
    padding: 0;
}
.notification-list > li {
    border-bottom: 1px solid #eee;
    margin-bottom: 5px;
    padding: 5px 0;
}
.notification-list .cat-icon {
    width: 20px;
}
.notification-list .avatar {
    width: 30px;
}
.rounded {
    border-radius: 0.25rem;
}
.n-user-list{margin-bottom:5px;}
.n-user-list:after{clear:both; content:''; display:table;}
.n-user-list li{float:left;}
.n-user-list li + li{margin-left:3px;}
.n-user-list li a, .n-user-list li a:hober{text-decoration:none;}
</style>

<div class="container">
<div class="page-header">
    <h4>Notifications</h4>
</div>
<div class="notifications">
  <ul class="notification-list">
    <!-- users following -->
    <li class="col-md-6" >
      <h6>followers</h6>
          <?php
          require 'connection.php';
          $qu = "SELECT * FROM millfollow where userprofile='$userid'";
          $qry = $conn->prepare($qu);
          $qry->execute();
          $fetch = $qry->fetchAll();
          foreach ($fetch as $r):
          $userfollow=$r['userlogged'];
          $query = mysql_query("SELECT * FROM member WHERE memberid ='$userfollow'");
      		$fhst = mysql_fetch_array($query);
      		$first = $fhst['firstname'];
          $last = $fhst['lastname'];
          $memberid = $fhst['memberid'];
          $memimg = $fhst['memberimg'];
          echo "<div class='media'>
                  <div class='media-left'>
                      <a href='profile.php?name=$memberid'>
                          <img src='https://www.servmill.com/administrator/images/upload/$memimg' class='media-object cat-icon rounded' alt='...'>
                      </a>
                    </div>
                  <div class='media-body'>
                      <ul class='n-user-list'>
                          <li><a href='https://www.servmill.com/profile.php?name=$memberid'><img src='https://www.servmill.com/administrator/images/upload/$memimg' class='avatar rounded' alt='...'></a></li>
                        </ul>
                      <p class='media-heading'><b>$first $last</b>followed you.</p>
                    </div>
                  </div>";
           endforeach;
           ?>
        </li>

        <li class="col-md-6" >
         <h6>Service recommends</h6>
         <?php
         require 'connection.php';
         $qu = "SELECT * FROM services where memberid='$userid'";
         $qry = $conn->prepare($qu);
         $qry->execute();
         $fetch = $qry->fetchAll();
         foreach ($fetch as $r):
         $service=$r['serviceid'];
         $query = mysql_query("SELECT * FROM service_repo WHERE serviceid ='$service'");
         $fhst = mysql_fetch_array($query);
         $memberlik = $fhst['memberid'];
         $serviceid = $fhst['serviceid'];
         $q = mysql_query("SELECT * FROM member WHERE memberid ='$memberlik'");
         $f = mysql_fetch_array($q);
         $firstname = $f['firstname'];
         $lastname = $f['lastname'];

         $memberid = $f['memberid'];
         $memimg = $f['memberimg'];

         $qr = mysql_query("SELECT * FROM services WHERE serviceid ='$serviceid'");
         $fh = mysql_fetch_array($qr);
         $title = $fh['servicename'];

         echo "<div class='media'><div class='media-left'>
                  <a href='https://www.servmill.com/profile.php?name=$memberid'>
                    <img src='https://www.servmill.com/administrator/images/upload/$memimg' class='media-object cat-icon rounded' alt='...'>
                  </a>
                </div>
               <div class='media-body'>
                  <ul class='n-user-list'>
                    <li><a href='https://www.servmill.com/profile.php?name=$memberid'><img src='https://www.servmill.com/administrator/images/upload/$memimg' class='avatar rounded' alt='...'></a></li>
                  </ul>
            <p class='media-heading'><b>$firstname $lastname</b> recommended  your <a href='details.php?id=$serviceid' >$title</a> service.</p>
                </div>
              </div>";
           endforeach;
          ?>
      </li>
    </ul>
  </div>
</div>
<!-- End of main content servmill -->
<?php ob_end_flush(); ?>
<?php footerservmill(); ?>
