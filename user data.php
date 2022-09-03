<?php
	$Write="<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
	file_put_contents('UIDContainer.php',$Write);
?>

<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="./css/styles.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
		<style>
			.table {
				margin: auto;
				width: 90%; 
			}
			
			thead {
				color: #FFFFFF;
			}

			.h2{
				margin-left: -18.1px;
			}
		</style>
		
		<title>User Data : RFID BASED ATTENDANCE/MONITORING SYSTEM</title>
	</head>
	
	<body>
		<h2 class="h2">RFID BASED ATTENDANCE/MONITORING SYSTEM</h2>
		<ul class="topnav">
			<li><a href="home.php">Home</a></li>
			<li><a class="active" href="user data.php">User Data</a></li>
			<li><a href="registration.php">Register</a></li>
			<li><a href="read tag.php">Read Tag ID</a></li>
			<li><a href="viewlogs.php">Check Location</a></li>
			<li><a href="attendance.php">Get Attendance</a></li>
		</ul>
		<br>
		<div class="container">
	      <div class="row">
	        <h3>Registered Users</h3>
	      </div>
	      <div class="row">
	        <table class="table table-striped table-bordered">
            <thead>
              <tr bgcolor="#61b15a" color="#FFFFFF">
                <th>Name</th>
                <th>ID</th>
                <th>Roll No.</th>
                <th>Branch</th>
							  <th>Gender</th>
							  <th>Email</th>
                <th>Mobile Number</th>
							  <th>Action</th>
              </tr>
            </thead>
              <tbody>
	              <?php
	               include 'database.php';
	               $pdo = Database::connect();
	               $sql = 'SELECT * FROM registered_users ORDER BY name ASC';
	               foreach ($pdo->query($sql) as $row) {
	                  echo '<tr>';
	                  echo '<td>'. $row['name'] . '</td>';
	                  echo '<td>'. $row['uid'] . '</td>';
	                  echo '<td>'. $row['roll_no'] . '</td>';
	                  echo '<td>'. $row['branch'] . '</td>';
	                  echo '<td>'. $row['gender'] . '</td>';
										echo '<td>'. $row['e_mail'] . '</td>';
										echo '<td>'. $row['mobile_no'] . '</td>';
										echo '<td><a class="btn btn-success" href="user data edit page.php?uid='.$row['uid'].'">Edit</a>';
										echo ' ';
										echo '<a class="btn btn-danger" href="user data delete page.php?uid='.$row['uid'].'">Delete</a>';
										echo '</td>';
	                  echo '</tr>';
	               }
	               Database::disconnect();
	              ?>
              </tbody>
					</table>
				</div>
		</div> <!-- /container -->
	</body>
</html>