<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="stylesheets/registation.css">
	<script src="jquary/jquary.js"></script>
	
</head>

<body>
	<div style="height:200px">
	
	</div>
	
<div class="contend">
	<div class="profilePicDiv">
		<img id="profilePic" src="images/profilePic.png" alt="">
	</div>
	<div ><h1 id ="headReg">Registation</h1></div>

	<div class="formLogIn">
		<form action="includes/sendData.php" method="POST">
			
			<input type="text" id="firstname_id" name="firstname" placeholder="Firstname" required>
			<input type="text" id="lastname_id" name="lastname" placeholder="Lastname" required>
			<input type="number" id="billnumber_id" name="billnumber" placeholder="Bill Number" required>
			<input type="password" id="password_id" name="password" placeholder="password" required>
			<input type="password" id="passwordConfirm_id" name="passwordConfirm" onfocusout="password_match()" placeholder="Confirm Password" required>
			<h2 id="show-result"></h2>
			
			
	
		</form>

	</div>

	<script>
	let buttonEnable;

   function password_match(){
    var password1 = document.getElementById('password_id').value ; 
    var password2 = document.getElementById('passwordConfirm_id').value ; 
    
     $.post("includes/check.php", {
     pass1: password1, pass2: password2 
      },
   
   function(data, status){
	
   document.getElementById('show-result').innerHTML = data ; 
   
   }
   ) ; 
	}

	
	

   </script>



</div>
	
	 <?php
		include "includes/databaseConnection.php";
		include "includes/check.php"	
	      
	   ?>
	
</body>

</html>
