<?php
    if(isset($_COOKIE['status']))
	{

        require_once "../model/adminDB.php";
        $prevp = $_REQUEST['prevpass'];
        $newp = $_REQUEST['newpass'];
        $lengthPrev = strlen($prevp);
        $lengthNew = strlen($newp);
        if(($lengthPrev && $lengthNew)>=6){
        session_start();
      
        $usrpass = $_SESSION['password'];
        $ussrid =  $_SESSION['ussrid'];
        $conn = getConnection();  
        $sqlPrev = "SELECT pass FROM admin where pass='$prevp'";     
        $sql = "UPDATE `admin` SET `pass`='$newp' where pass='$usrpass'";
         $result = mysqli_query($conn, $sqlPrev);
         $row = mysqli_fetch_assoc($result);             
        if(count($row) > 0){  
                $resultChng =mysqli_query($conn, $sql);
                if($resultChng){
                echo "Password changed";
                }else{
                  echo "Password could not be changed";
                } 
      }
        else{
            
                   echo "Password didn't match, try again";           
        }
    }
    else{
    echo "Password too short";
  }
  }
 
    else
    {
        echo "Invalid request";
    }
  
?>