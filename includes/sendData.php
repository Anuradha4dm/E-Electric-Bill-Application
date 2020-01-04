

<?php
        include "databaseConnection.php";

        $fname=$_POST["firstname"];
        $lname=$_POST["lastname"];
        $billNum=$_POST["billnumber"];
        $password=$_POST["password"];


        $pass=password_hash($password,PASSWORD_DEFAULT);
         
        $sql="INSERT INTO `users`(`billNumber`, `fname`, `lname`, `userPassword`) VALUES ('$billNum','$fname','$lname','$pass');";
       mysqli_query($conn,$sql);

       
        header("Location:../login.php");
        

       ?>