<?php
//Creates new record as per request   39A2588D
    //Connect to database

    require 'connectDB.php';

    //Get current date and time
    date_default_timezone_set('Asia/Kolkata');
    $d = date("Y-m-d");
    // echo " Date:".$d."<BR>";
    $t = date("H:i:s");

    $Write="<?php $" . "UIDresult='" . $_POST['UIDresult'] . "'; " . "echo $" . "UIDresult;" . " ?>"; //add1
    file_put_contents('UIDContainer.php',$Write); //add2

    if(!empty($_POST['UIDresult']) && !empty($_POST['location']))
    {
    	$uid = $_POST['UIDresult'];
        $loc = $_POST['location'];

        
        //IN_OUT CODE
        $IO = "IN";
        $sql_IO = "SELECT * FROM logs WHERE uid='$uid' AND location='$loc'";
        if ($qresult=mysqli_query($conn,$sql_IO)){
                            
            $rowcount=mysqli_num_rows($qresult);
            if($rowcount > 0){
                if($rowcount%2){
                    $IO = "OUT";
                }
            }
            mysqli_free_result($qresult);
        }

        $sql = "SELECT * FROM registered_users WHERE uid=?";
        $result = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($result, $sql)) {
            echo "SQL_Error_Select_device";
            exit();
        }
        else{
            mysqli_stmt_bind_param($result, "s", $uid);
            mysqli_stmt_execute($result);
            $res1 = mysqli_stmt_get_result($result);
            if ($row = mysqli_fetch_assoc($res1)){
                $name = $row['name'];
                $rollno = $row['roll_no'];
                $branch = $row['branch'];
                $mob_no = $row['mobile_no'];
                $sql1 = "INSERT INTO logs (name, uid, roll_no, branch, mobile_no, location, date, time, status) VALUES ('".$name."', '".$uid."', '".$rollno."', '".$branch."', '".$mob_no."', '".$loc."','".$d."', '".$t."', '".$IO."')";
                if ($conn->query($sql1) == TRUE) {
                    echo "OK";
                } 
                else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
            else{
                echo "Invalid Device!";
                exit();
            }
        }
		
	}


	$conn->close();
?>