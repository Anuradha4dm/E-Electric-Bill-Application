

<?php
include "databaseConnection.php";

	$sql="SELECT * FROM student;";
	$result=mysqli_query($conn,$sql);
	$resultCheck=mysqli_num_rows($result);

	if($resultCheck>0){
		while($row=mysqli_fetch_assoc($result)){

			$subject= $row["subjects"];
			$grade= $row["grade"];
			$id= $row["id"];

		}
	}

	?>


        
