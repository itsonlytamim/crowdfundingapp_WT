<?php
if(isset($_GET['Message'])){
    echo "logout successful";
}
    require_once "../controller/logincheck.php";
    $loginAdmin= new testlogin();
    $valid=$loginAdmin->validLogin();
    $error=$loginAdmin->get_errors();

    $idErr=$error["idErr"];
    $passErr=$error["passErr"];
	$validityErr=$error["validityErr"];

?>
    <html>
    <head>
  <meta charset="UTF-8">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'><link rel="stylesheet" href="../css/style.css">

</head>
    <body>
           <script src="js/adminLogin.js"></script>
           <div class="container">
	       <div class="scren">
		   <div class="screen__content">
    <form class="login" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
           <div class="login__field">
				<i class="login__icon fas fa-user"></i>
                 <input type="text" class="login__input" name="userid" value=""  placeholder="User name"/> 
                <span class="error"; style="color:#FF0000"><br>*<?php echo $idErr;?></span>
            </div>
			<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
                <input type="password" class="login__input" name="pass" value=""  placeholder="Password"/> 
                <span class="error"; style="color:#FF0000"><br>*<?php echo $passErr;?></span>
            </div>
                <input type="submit" name="login" value="Login" /><br>
                <p>Create an Account now!</p><a href="../index.php" style="color:red;">Register </a>
        </form>
        </div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
    </body>

    </html>