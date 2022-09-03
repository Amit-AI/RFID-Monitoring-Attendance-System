<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "rfiddb");
$output = '';
if(isset($_GET["export"]))
{
    $st = $_GET['stTime'];
    $en = $_GET['enTime'];
    $d = $_GET['date'];
    $sec = $_GET['branch'];
    $rn = $_GET['room'];
    $query = "SELECT * FROM `logs` WHERE (time >='$st' AND time<='$en') AND date='$d' AND branch='$sec' AND location='$rn' ORDER BY roll_no ASC";
    $result = mysqli_query($connect, $query);
    if(mysqli_num_rows($result) > 0)
    {
        $output .= '
        <table class="table" bordered="1">  
            <tr>    
                <th>Name</th>
                <th>Roll No.</th>
                <th>Branch-Section</th>
                <th>Location</th>
                <th>Date</th>
                <th>Time</th>
                <th>Status</th>

            </tr>
        ';
        while($row = mysqli_fetch_array($result))
        {
            $output .= '
            <tr> 
                <td>'.$row["name"].'</td>  
                <td>'.$row["roll_no"].'</td>   
                <td>'.$row["branch"].'</td>   
                <td>'.$row["location"].'</td>   
                <td>'.$row["date"].'</td>   
                <td>'.$row["time"].'</td>   
                <td>'.$row["status"].'</td>   
            </tr>
            ';
        }
        $output .= '</table>';
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment; filename=attendance_download.xls');
        echo $output;
    }
    else{
        echo "INVALID DETAILS!";
    }
}
//application/xls
?>