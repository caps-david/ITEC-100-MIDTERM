<?php 
   $servername = "localhost";
   $usern = "root";
   $password = "";
   $dbname = "user";
   
   // Create connection
   $conn = new mysqli($servername, $usern, $password, $dbname);
   // Check connection
   if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }

  if (isset($_POST['logout'])) {
        date_default_timezone_set('Asia/Taipei');
        $time = date("h:i:s");    
        $currentDate = strtotime($time);
        $futureDate = $currentDate+(10);                
        $formatDate = date("Y-m-d", $futureDate);
        $user_id = $_POST['userr']??"David";
        $message = "LOGOUT";
        $activitysql = "INSERT INTO `activity_log`(`Username`, `Activity`, `Time`, `Date`) VALUES ('$user_id','$message','$time','$formatDate')";
        $result1 = mysqli_query($conn,$activitysql);
        echo "<script>
                alert('Logout Successfully');
                window.location.href='index.php';
                </script>";
          
  }
  ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Main Page</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="landstyle.css">
  </head>
  <body>
    <div class="open">
      <div class="layer"></div>
      <div class="layer"></div>
    </div>
    <section>
      <div class="header">
        <h2 class="logo">DAVID CABILES</h2>
        <ul>
          <li>
            <a href="#" class="active">Home</a>
          </li>
          <li>
            <a href="#">About</a>
          </li>
          <li>
            <a href="#">Services</a>
          </li>
          <li>
            <a href="activitylog.php">Activity Log</a>
          </li>
          <li>
            <a href="#">Portfolio</a>
          </li>
          <li>
            <a href="#">Contact</a>
          </li>
        </ul>
      </div>
    <form method="POST">
      <div class="bannerText">
        <h2>Welcome User</h2><br>
        <h3>Feel free to navigate</h3>
        <br>
        <br>
        <button type="submit" name="logout" style="opacity: 0;
        display: inline-block;
        margin: 20px 0 0;
        padding: 10px 20px;
        background: #000;
        color: #fff;
        font-weight: 500;
        text-decoration: none;
        font-size: 1.2em;
        letter-spacing: 1px;
        animation: fadeInBottom 0.5s linear forwards;
        animation-delay: 5.5s;
        cursor: pointer;">LOGOUT</button>
      </div>
    </form>
      <img src="bulb.jpg" class="bulb">
      <ul class="sci">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
      </ul>
      <div class="element1"></div>
      <div class="element2"></div>
    </section>
  </body>
</html>
