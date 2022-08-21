<?php
    if(isset($_COOKIE['status']))
	{
		$uid = $_REQUEST["userid"];
?>

<html>
<head>
	<title>Admin Home Page</title>

</head>
<body>
    <style type="text/css">
    fieldset{
        border: 2px solid;
        border-collapse: collapse;
        width:100%;
        color: #588c7e;
        font-family: monospace;
        font-size: 25px;
        text-align: left;
    }

</style>
	<fieldset >
        <h1>Welcome, <?php echo $uid ?></h1><br>
		<a href="adminprofile.php" style="color:#FF0000;"> Profile</a> <br><br>    
		<a href="viewUsers.php" style="color:#FF0000;"> View Users</a><br><br>
        <a href="viewPosts.php" style="color:#FF0000;"> View Posts</a><br><br>
        <a href="../controller/logout.php" style="color:#FF0000;">Log-out</a>

	</fieldset>
</body>
</html>

<?php
    }
    else
    {
        echo "Invalid request";
    }
?>