

<?php
        include "databaseConnection.php";

        $fname=$_POST["firstname"];
        $lname=$_POST["lastname"];
        $billNum=$_POST["billnumber"];
        $password=$_POST["password"];

          echo $password;
        $sql="INSERT INTO `users`(`billNumber`, `fname`, `lname`, `userPassword`) VALUES ('$billNum','$fname','$lname','$password');";
       mysqli_query($conn,$sql);

        

       ?>