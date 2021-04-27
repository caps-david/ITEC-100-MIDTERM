<?php include 'validation.php'?>
<!DOCTYPE html>
<html>
<head>
	<title>Authentication Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<style type="text/css">

	.container{
	width: 100%;
	height: 100vh;
	font-family: sans-serif;
	background-image: linear-gradient(to right, #16222A, #3A6073);
	color: #fff;
	display: flex;
	align-items: center;
	justify-content: center;
	}

	.card{
	width: 350px;
	height: 500px;
	box-shadow: 0 0 40px 20px rgba(0,0,0,0.26);	
	perspective: 1000px;
	background-position: center;
	background-size: cover;
	background-image: linear-gradient(rgba(0,0,100,0.8), rgba(0,0,100,0.8)), url(bg.jpeg);
	box-sizing: border-box;
	}

	.input-box{
	width: 80%;
	background: transparent;
	border: 1px solid #fff;
	margin: 6px 0;
	height: 32px;
	border-radius: 20px;
	padding: 0 10px;
	box-sizing: border-box;
	outline: none;
	text-align: center;
	color: #fff;
	margin-left: 35px;
	margin-top: 20px;
	}

	::placeholder{
	color: #fff;
	font-size: 12px;
	}

	button{
	width: 70%;
	background: transparent;
	border: 1px solid #fff;
	margin: 35px 0 10px;
	height: 32px;
	font-size: 12px;
	border-radius: 20px;
	padding: 0 10px;
	box-sizing: border-box;
	outline: none;
	color: #fff;
	cursor: pointer;
	margin-left: 55px;
	}

	.submit-btn{
		position: relative;
	}

	.submit-btn::after{
		content: '\27a4';
		color: #333;
		line-height: 32px;
		font-size: 17px;
		height: 32px;
		width: 32px;
		border-radius: 50%;
		background: #fff;
		position: absolute;
		right: -1px;
		top: -1px;
	}

	.card h1{
	font-weight: normal;
	font-size: 30px;
	text-align: center;
	margin-top: 70px;
	}

	.card h2{
	font-weight: normal;
	font-size: 24px;
	text-align: center;
	position: relative;
	top: 20px;
	}







	</style>

	<div class="container">
		<div class="card">
		<h1>Authentication</h1>
	
	<form method="POST">
		
			<h2>Code: </h2>
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
        $code = rand(100000,999999);
        echo "<p align=center> $code </p>";
        date_default_timezone_set('Asia/Taipei');
        $time = date("h:i:s");     
        $currentDate = strtotime($time);
        $expireDate = date('Y-m-d H:i:s', strtotime("+1 day"));
        $futureDate = $currentDate+(10);                
        $formatDate = date("Y-m-d", $futureDate);
        $user_id = $_POST['userr']??"David";
        $codeins = "INSERT INTO `authentication`(`User_ID`,`Code`, `Created At`, `Expiration`) VALUES ('$user_id','$code','$time','$expireDate')";
        $result = mysqli_query($conn, $codeins);
        if(isset($_POST['enter'])){
                $code = $_POST['codename'];
		    	$select = "SELECT * FROM authentication where Code = '$code'";
		    	$result = mysqli_query($conn, $select);
		    	$num = mysqli_num_rows($result);
                $message = "LOGIN";
                $activitysql = "INSERT INTO `activity_log`(`Username`, `Activity`, `Time`, `Date`) VALUES ('$user_id','$message','$time','$formatDate')";
                $result1 = mysqli_query($conn,$activitysql);
		    	if($num>0){
		            echo "<script>
					alert('Login Successfully');
					window.location.href='landing.php';
					</script>";
		    	}
		    	else{
		    		echo "<script>
					alert('Try Again!');
					window.location.href='authentication.php';
					</script>";
		    	}
     } 

        ?>        
			
			<input type="text" class="input-box" name='codename' placeholder="Enter Code" >

		
		
		
		<button type="submit" name="enter" class="submit-btn">Enter</button>
		</form>
		</div>
		</div>
</body>
</html>