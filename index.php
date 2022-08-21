<?php

    require_once "controller/regcheck.php";
    $fd_admin= new testReg();
    $validating=$fd_admin->validReg();
    $error=$fd_admin->get_error();

    $nameErr=$error["nameErr"];
    $idErr=$error["idErr"];
    $emailErr=$error["emailErr"];
    $passErr=$error["passErr"];
    $conpassErr=$error["conpassErr"];
    $genderErr=$error["genderErr"];
	$dobErr=$error["dobErr"];
	$usertypeErr=$error["usertypeErr"];
?>
<html>
<head>
  <meta charset="UTF-8">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'><link rel="stylesheet" href="css/style.css">
</head>
<body>
	 <script src="js/adminReg.js"></script>
	 <div class="container">
	       <div class="screen_reg">
		   <div class="screen__content">
    <form  class="register" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
          <br><div class="register__field">
				<i class="login__icon fas fa-user"></i>

                <input type="text"  class="reg__input" name="adname" value="" placeholder="Name"/> 
				<span class="error"; style="color:#FF0000"><br><?php echo $nameErr;?></span>
                 </div>
			   <div class="register__field">
					<i class="login__icon fas fa-user"></i>
				<input type="text"  class="reg__input" name="userid" value="" placeholder="User Id"/> 
				<span class="error"; style="color:#FF0000"><?php echo $idErr;?></span>
                 </div>
			    <div class="register__field">
					<i class="login__icon fas fa-user"></i>
                <input type="text"  class="reg__input" name="email" value="" placeholder="Email"/>
				<span class="error"; style="color:#FF0000"><br><?php echo $emailErr;?></span>
			    </div>
				<div class="register__field">
					<i class="login__icon fas fa-lock"></i>
				<input type="password"  class="reg__input" name="pass" value=""placeholder="Password"/> 
				<span class="error"; style="color:#FF0000"><?php echo $passErr;?></span>
				</div>
                <div class="register__field">
				<i class="login__icon fas fa-lock"></i>
				<input type="password"  class="reg__input" name="conpass" value=""placeholder="Confirm Pass"/> 
				<span class="error"; style="color:#FF0000"><?php echo $conpassErr;?></span>
				</div>
				<div>
                Gender<br> 
              <label class="rad-label">
              <input type="radio" class="rad-input" name="gender" value="Male">
              <div class="rad-design"></div>
             <div class="rad-text">Male</div>
             </label>
			  <label class="rad-label">
              <input type="radio" class="rad-input" name="gender" value="Female">
              <div class="rad-design"></div>
             <div class="rad-text">Female</div>
             </label>
			  <label class="rad-label">
              <input type="radio" class="rad-input" name="gender" value="Others">
              <div class="rad-design"></div>
             <div class="rad-text">Other</div>
             </label>
			 <span class="error"; style="color:#FF0000"><?php echo $genderErr;?></span>

				</div>  
				<!-- <br>         <input type="radio" name="gender" value="Male"> Male <br>
							<input type="radio" name="gender" value="Female"> Female <br>
							<input type="radio" name="gender" value="Other"> Other<br>
							<span class="error"; style="color:#FF0000"><br><?php  $genderErr;?></span> 
							<br><br> -->
							<div>
								 Date of Birth<br>
							</div>
               
						<input type="date" name="dob" value="" >
						<span class="error"; style="color:#FF0000"><?php echo $dobErr;?></span> 
						<br><br>

						<div>
                       User type <br>
					    <label class="rad-label">
              <input type="radio" class="rad-input" name="UserType" value="Admin">
              <div class="rad-design"></div>
             <div class="rad-text">Admin</div>
             </label>
			  <label class="rad-label">
              <input type="radio" class="rad-input" name="UserType" value="User">
              <div class="rad-design"></div>
             <div class="rad-text">User</div>
             </label>
		    <span class="error"; style="color:#FF0000"><?php echo $usertypeErr;?></span>
				 
						</div>
				       
				<!-- <input type="radio" name="UserType" value="User"> User <br>
				<input type="radio" name="UserType" value="Admin"> Admin
				<br>
				<span class="error"; style="color:#FF0000"><?php echo $usertypeErr;?></span> -->
				<input type="submit" name="signup" value="Signup"/> <br>
				<p>Already have an Account?</p><a href="view/loginadmin.php"  style="color:#FF0000;"> Log In</a>
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