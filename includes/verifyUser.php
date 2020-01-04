

<?php

session_start();
unset( $_SESSION["errorPass"]);
include "databaseConnection.php";

  $userPassword=$_POST["password"];
  $encriptedPassword=sha1($userPassword);
  $val=$_POST["billnumber"];

	$sql="SELECT * FROM `users` WHERE `billNumber`=$val;";
	$result=mysqli_query($conn,$sql);
  $resultCheck=mysqli_num_rows($result);
    
    

  
  $row=mysqli_fetch_assoc($result);
  
  $_SESSION["accountNumber"]=$row["accountNumber"];


    
  if($resultCheck===1){
        $pass=$row["userPassword"];

        if($pass!=$encriptedPassword){
          $message="Password Not Match";
          $_SESSION["errorPass"]=$message;
          
        header("Location: ../index.php");

        }
        else{
          header("Location: ../main.php");
          
        }
  }
  else{
    $message="Invalid Account Number";

    $_SESSION["errorPass"]=$message;
          
   
   header("Location: ../index.php");
    
  }

 

  //header("Location: ../main.php")

	?>