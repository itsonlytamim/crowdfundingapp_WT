<?php
require_once "../model/adminDB.php";
$userid="";
$pass="";
$hasErr=false;
class testlogin{
public $error = array(
        'idErr'=>"",
        'passErr'=>"",
        'validityErr'=>"",
    );

 function validLogin(){
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {


  if (empty($_POST["userid"])) {
    $hasErr=true;
    $this-> error["idErr"] = "Userid is required";
  }else{
    $userid = $_REQUEST["userid"];
  }

  

    
  if(empty($_POST["pass"]))
		{
		$hasErr=true;
		$this-> error["passErr"] = "Password required";
		}else{
    
       $pass = $_REQUEST["pass"];
  }
    

   if (!$hasErr){
    $conn = getConnection();
        
      	      $sql = "select * from admin where userid='$userid' and pass='$pass'";
        			$result = mysqli_query($conn, $sql);
              $row = mysqli_fetch_assoc($result);             
                if(count($row) > 0){             
                   setcookie('status', 'go', time()+60, '/');	
                   session_start();
                   $_SESSION['name']=$row['adname']; 
                   $_SESSION['ussrid']=$row['userid']; 
                   $_SESSION['email']=$row['email']; 
                   $_SESSION['password']=$row['pass']; 
			       header('location: ../view/adminhome.php?userid='.$row['userid']);
		        }
                else{
             header('location: ../view/authError.php');            
	        }
        }
        }
    }
 
        function get_errors(){
        return $this -> error;
    }
}
?>