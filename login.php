<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="stylesheets/login.css">
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
		<form action="includes/verifyUser.php" method="POST">
			
			<input type="number" id="billnumber_id" name="billnumber" placeholder="Account Number" required>
			<input type="password" id="password_login_id" name="password" placeholder="password" required><br>
			<input type="submit" class="submitBtn">

			<h2 id="show-result"></h2>
			
			
	
		</form>

    </div>
    
    <?php
        include "includes/getData.php";

    ?>

	<script>
	let buttonEnable;

   function password_match(){
    var password1 = document.getElementById('password_login_id').value ; 
    var password2 = ;
    
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
		
        include "includes/check.php";
       	
	      
	   ?>
	
</body>

</html>
