<?php
        // Include confi.php
        include_once('connect.php');
          if(isset($_POST['username']) && isset($_POST['password'])){
                  // Innitialize Variable
          $username = $_POST['username'];
          $password = $_POST['password'];
      $qur = mysql_query("select memberid, email, contactno, address, street, verification from `member` where userid='$username' and password='$password'");
                $result =array();
                while($r = mysql_fetch_array($qur)){
                        extract($r);
 $result[] = array("memberid" => $memberid, "email" => $email, "verification" => $verification, "contactno" => $contactno,"address"=> $address, "street"=>$street);
                }
                $json = array("status" => 1, "info" => $result);
        }else{
                $json = array("status" => 0, "msg" => "User ID not define");
        }
        @mysql_close($conn);

        /* Output header */
        header('Content-type: application/json');
        echo json_encode($json);
?>

