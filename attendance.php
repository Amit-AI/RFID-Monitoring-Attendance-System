<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ATTENDANCE : RFID BASED ATTENDANCE/MONITORING SYSTEM</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="./css/styles.css" rel="stylesheet">
	<script src="js/bootstrap.min.js"></script>
</head>
<style>
  
  #form {
    background-color: #FFF;
    height: 400px;
    width: 600px;
    margin-right: auto;
    margin-left: auto;
    margin-top: 0px;
    border-radius: 10px;
    text-align: center;
    border: 2px solid gray;
    padding-top: 43px;
}
  label {
      font-family: Georgia, "Times New Roman", Times, serif;
      font-size: 18px;
      color: #333;
      height: 20px;
      width: 200px;
      margin-top: 10px;
      margin-left: 10px;
      text-align: right;
      clear: both;
      float:left;
      margin-right:15px;
  }

  span {
    display: block;
    padding: 0px 80px 0px 129px;
    
  }

  input {
    width: 50%;
    margin:0;
  }
  .btn {
    width:30%;
    padding-top:10px;
    padding-bottom: 10px;
    margin-top: auto;
    margin-bottom: auto;
    color: white;
    border: 1px solid #FB8F3D; 
    background: -webkit-linear-gradient(top, #FDA251, #FB8F3D);
    background: -moz-linear-gradient(top, #FDA251, #FB8F3D);
    background: -ms-linear-gradient(top, #FDA251, #FB8F3D);
  }

  .btn:hover {
      border: 1px solid #EB5200;
      background: -webkit-linear-gradient(top, #FD924C, #F9760B); 
      background: -moz-linear-gradient(top, #FD924C, #F9760B); 
      background: -ms-linear-gradient(top, #FD924C, #F9760B); 
      box-shadow: 0 1px #EFEFEF;
  }

  .btn:active {
      box-shadow: inset 0 1px 1px rgba(0,0,0,0.3);
  }

  .head{
    margin-bottom: 25px;
    font-size: 1.6rem;
  }
  .h2{
    text-align: center;
  }
</style>
<body>
  <h2 class = "h2">RFID BASED ATTENDANCE/MONITORING SYSTEM</h2>
  <ul class="topnav">
    <li><a href="home.php">Home</a></li>
    <li><a href="user data.php">User Data</a></li>
    <li><a href="registration.php">Register</a></li>
    <li><a href="read tag.php">Read Tag ID</a></li>
    <li><a href="viewlogs.php">Check Location</a></li>
    <li><a class="active" href="attendance.php">Get Attendance</a></li>
  </ul>
  <br>
  <h1 class = "head"> Fill Lecture Details Below<h1>
  <div id="form">
      <form action="./export.php" method="get">
          <fieldset>
              <label for="stTime" >Start Time:</label>
              <span>
                  <input type="time" id="appt" name="stTime">
              </span><br>
              
              <label for="enTime" >End Time:</label>
              <span>
                  <input type="time" id="appt" name="enTime">
              </span><br>
              <label for="date" >Date:</label>
              <span>
                  <input type="date" id="appt" name="date">
              </span><br>
              <label for="branch" >Branch-Section:</label>
              <span>
                  <input type="text" id="appt" name="branch">
              </span><br>
              <label for="room" >Room No.:</label>
              <span>
                  <input type="text" id="appt" name="room">
              </span><br>
              <input type="submit" name = "export" class="btn btn-success" value="Download Attendance">
          </fieldset>
      </form>
  </div>
</body>
</html>