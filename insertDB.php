<?php
     
    require 'database.php';
 
    if ( !empty($_POST)) {
        // keep track post values
        $name = $_POST['name'];
		$id = $_POST['id'];
		$gender = $_POST['gender'];
        $email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$roll_no = $_POST['rollno'];
		$section = $_POST['branchSec'];
        
		// insert data
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO registered_users (name, uid, roll_no, branch, gender, e_mail, mobile_no) values(?, ?, ?, ?, ?, ?, ?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($name, $id, $roll_no, $section, $gender,$email,$mobile));
		Database::disconnect();
		header("Location: user data.php");
    }
?>