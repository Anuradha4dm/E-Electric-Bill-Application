
<?php
include "../includes/billRetriveData.php";
include "../includes/databaseConnection.php";


?>
<!DOCTYPE html>
<html>

<head>
    <title>Bill History</title>
    <link rel="stylesheet" href="../stylesheets/mainStyles.css">
    <script src="jquary/jquary.js"></script>

</head>

<body>


    
    <div class="headerBar">

    </div>

    <div class="navigation">

        <ul>

            <li><a href="">Current Bill Value</a></li>
            <li><a href="">Bill History</a></li>
            <li><a href="">Set Limit</a></li>
            <li><a href="">Informations</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">About Us</a></li>
        </ul>

    </div>


    <div class="billHistory">

        <h1 id="billHistory_id">Bill History</h1>

        <div class="billTable"></div>
            <table>
                <tr>
                    <th>Read Data</th>
                    <th>Current Value</th>
                    <th>Unit Amout</th>
                    <th>Bill Value</th>

                </tr>


                <?php
                     
                $sql="SELECT * FROM `users` ";
                $result=mysqli_query($conn,$sql);
   
                     if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                           echo "<tr> ";
                           echo "<td>".$row["billNumber"]."</td> ";
                           echo "<td>".$row[""]."</td> ";
                           echo "<td>".$row[""]."</td> ";
                           echo "<td>".$row[""]."</td> ";
                           echo "</tr> ";
                        }

                    }
                    ?>

              
               

              


            </table>
        </div>




    </div>


</html>