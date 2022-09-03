<!DOCTYPE html>
<html>
<head>
    <!-- <meta http-equiv="refresh" content="5"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/styles.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <script src="jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<style>

    .logs{
        margin: 1rem auto 1rem auto;
    }

    .cards{
        width: 70%;
        margin: auto;
    }

    /*.card{
        width: 100%;
        margin: 0;
    }*/

    .tab th{
        background-color: #00A8A9;
        color: white;
    }



</style>
<body>
<h2 class="h2">RFID BASED ATTENDANCE/MONITORING SYSTEM</h2>
<ul class="topnav">
    <li><a href="home.php">Home</a></li>
    <li><a href="user data.php">User Data</a></li>
    <li><a href="registration.php">Register</a></li>
    <li><a href="read tag.php">Read Tag ID</a></li>
    <li><a class="active" href="viewlogs.php">Check Location</a></li>
    <li><a href="attendance.php">Get Attendance</a></li>
</ul>

<h3 align="center" class = "logs" >Location Logs</h3>


<?php
    require 'connectDB.php';
?> 


<div id="cards" class="cards">
    <div id="card" class="card">
        <?php 
            $sql = "SELECT * FROM logs ORDER BY id DESC";
            if ($result=mysqli_query($conn,$sql))
            {
            // Fetch one and one row
            echo "<table class='table tab table-hover table-dark'>";
            echo "<thead class='thead-dark'>
                      <TR>
                          <TH scope='col'>Sr.No.</TH>
                          <TH scope='col'>Name</TH>
                          <TH scope='col'>UID</TH>
                          <TH scope='col'>Roll No.</TH>
                          <TH scope='col'>Branch</TH>
                          <TH scope='col'>Mobile No.</TH>
                          <TH scope='col'>Location</TH>
                          <TH scope='col'>Date</TH>
                          <TH scope='col'>Time</TH>
                          <TH scope='col'>Status</TH>
                      </TR>
                  </thead>";
            echo "<tbody>";
            while ($row=mysqli_fetch_row($result))
            {
                echo "<TR scope='row'>";
                echo "<TD>".$row[0]."</TD>";
                echo "<TD>".$row[1]."</TD>";
                echo "<TD>".$row[2]."</TD>";
                echo "<TD>".$row[3]."</TD>";
                echo "<TD>".$row[4]."</TD>";
                echo "<TD>".$row[5]."</TD>";
                echo "<TD>".$row[6]."</TD>";
                echo "<TD>".$row[7]."</TD>";
                echo "<TD>".$row[8]."</TD>";
                echo "<TD>".$row[9]."</TD>";
                
                echo "</TR>";
            }
            echo "</tbody>";
            echo "</table>";
            // Free result set
            mysqli_free_result($result);
            }

            mysqli_close($conn);
        ?>
    </div>

    

    
</div>
<script>
        var  $cards = $("#card");
        setInterval(function () {
            $cards.load("viewlogs.php #card");
        }, 5000);
</script>
</body>
</html>