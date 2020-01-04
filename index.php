<?php
        session_start();

    ?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link type="text/css" rel="stylesheet" href="stylesheets/login.css">
	<script src="jquary/jquary.js"></script>

</head>

<body>
	<div style="height:200px">
	
	</div>
	
<div class="contend">
	<div class="profilePicDiv">
		<img id="profilePic" src="images/profilePic.png" alt="">
	</div>
	<div ><h1 id ="headReg">Log In</h1></div>

	<div class="formLogIn">

	<?php

		if(isset($_SESSION["errorPass"])){
			echo '<div class="isa_error">
			<i class="fa fa-times-circle"></i>';

			echo $_SESSION["errorPass"];
		 echo '</div>';
		}



		?>
		<form action="includes/verifyUser.php" method="POST">
			
			
		<input type="number" id="billnumber_id" name="billnumber" placeholder="Account Numbers" required>
	
			<input type="password" id="password_login_id" name="password" placeholder="password" required><br>
			
			<h1 id="check"></h1>
			<input type="submit" class="submitBtn">
	
		</form>

	</div>
	
	
	
    
	


</div>
	
	 <?php
		
        include "includes/check.php";
       	
	      
	   ?>
	
</body>

</html>
