

<?php
        include "databaseConnection.php";

        $fname=$_POST["firstname"];
        $lname=$_POST["lastname"];
        $billNum=$_POST["billnumber"];
        $password=$_POST["password"];


        $pass=sha1($password);
         
        $sql="INSERT INTO `users`(`billNumber`, `fname`, `lname`, `userPassword`) VALUES ('$billNum','$fname','$lname','$pass');";
       mysqli_query($conn,$sql);

       
        header("Location: ../index.php");
        

       ?>