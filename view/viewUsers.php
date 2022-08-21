
<?php

    if(isset($_COOKIE['status']))
	{
		require_once "../model/adminDB.php";
?>
<style type="text/css">
    table{
        border: 2px solid;
        border-collapse: collapse;
        width:100%;
        color: #588c7e;
        font-family: monospace;
        font-size: 25px;
        text-align: left;
    }

</style>
 <?php 

       echo "<table>";
       echo  "<tr>";
       echo "<th>"."Name"."</th>";
       echo "<th>"."Username"."</th>";
       echo "<th>"."Email"."</th>";
       echo "<th>"."Gender"."</th>";
       echo "<th>"."Date Of Birth"."</th>";
       echo "<th>"."User Type"."</th>";
       echo "<th>".""."</th>";
       echo "</tr>";

    $conn = getConnection();       
    $sql = "SELECT adname, userid, email, gender, dob, UserType FROM admin";
    $result = mysqli_query($conn, $sql);
        // for($i=1;$i<=$counter;$i++)
        // { 
        //    echo "<tr>";
        //     for($j=1;$j<=$col;$j++)
        //     { 
        //         while($row = mysqli_fetch_assoc($result) ){
        //         if($j==1)
        //         {
        //                             echo "<td>".$row['adname']."</td>"; 
        //         }
        //          if($j==2)
        //         {
        //                             echo "<td>".$row['userid']."</td>"; 
        //         }
        //          if($j==3)
        //         {
        //                             echo "<td>".$row['email']."</td>"; 
        //         }
        //          if($j==4)
        //         {
        //                             echo "<td>".$row['UserType']."</td>"; 
        //         }

        //     }
        //     }


        //        echo "</tr>";
            
        // } 
        while( $row = mysqli_fetch_assoc($result)){
            echo "<tr><td>" 
                       . $row["adname"] . "</td><td>"
                       . $row["userid"]. "</td><td>"  
                       . $row["email"] . "</td><td>"
                       . $row["gender"] ."</td><td>"
                       . $row["dob"] . "</td><td>"
                       . $row["UserType"] . "</td></tr>" ;                      
                  }   
       echo "</table>";    
    } 
    else
    {
        echo "Invalid request";
    }
?>  