<?php
$conn = mysql_connect('localhost','root','');
 if (!$conn)
{
 die('Could not connect: ' . mysql_error());
  }
mysql_select_db("servmill", $conn);

if(isset($_POST['page'])):
    $resultsPerPage=5;
    $paged=$_POST['page'];
    $sql="SELECT * FROM `servicecategories` ORDER BY `servicecategories`.`categoryid` ASC";
    if($paged>0){
           $page_limit=$resultsPerPage*($paged-1);
           $pagination_sql=" LIMIT  $page_limit, $resultsPerPage";
           }
    else {
    $pagination_sql=" LIMIT 0 , $resultsPerPage";
    }
    $result=mysql_query($sql.$pagination_sql);

    if($result === FALSE) {
  	    die(mysql_error()); // TODO: better error handling
  	}

    $num_rows = mysql_num_rows($result);

    if($num_rows>0){

      while($data=mysql_fetch_array($result)){

      echo"<div class='panel'>
    	<a href ='http://www.servmill.com/services/".$data['categoryid']."'> <center>".$data['categoryname']."</center> </a>
    </div>";
      }
    }
    if($num_rows == $resultsPerPage){ ?>

      <center><a class="loadbutton"><button class="loadmore" data-page="<?php echo  $paged+1 ;?>">Load More</button></a></center>
 <?php
  }else{
    echo "<a href='#'>No more categories to show</a>";
 }
 endif;
 ?>
