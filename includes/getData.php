

<?php
include "databaseConnection.php";

	$AccountNum=$_POST["billnumber_id"];

	$sql="SELECT * FROM `users` WHERE `billNumber`=100;";
	$result=mysqli_query($conn,$sql);
	$resultCheck=mysqli_num_rows($result);
	
	$row=mysqli_fetch_assoc($result);

	echo $row["billNumber"];

	if($resultCheck==1){
		//while($row=mysqli_fetch_assoc($result)){

		//	if($AccountNum === $row["billNumber"]){

			//	$Pass=password_verify($row["userPassword"]);
		//	}
			//else{

			//}
		//}
				echo $row("billNumber");

	}
	else{
		echo "not";
	}

	?>


        
