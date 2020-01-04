

<?php
include "databaseConnection.php";

$AccountNum=$_POST["billnumber_id"];

	$sql="SELECT * FROM `users` WHERE `billNumber`=100;";
	$result=mysqli_query($conn,$sql);
	$resultCheck=mysqli_num_rows($result);
	

	if($resultCheck>0){
		echo 'found';
	}
	else{
		echo "not found";
	}

	?>


        
