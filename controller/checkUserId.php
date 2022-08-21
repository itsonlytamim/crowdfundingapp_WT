<?php 

require_once "model/adminDB.php";
function checkId($userid){
 $conn = getConnection();
      	$sql = "select * from admin where userid='$userid'";
        			$result = mysqli_query($conn, $sql);
              $row = mysqli_fetch_assoc($result);
              if(count($row) > 0){
                return true;
              }
              return false;
            }				      

?>