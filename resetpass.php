<?php 
session_start();
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

if (isset($_POST['new'])) {

    date_default_timezone_set('Asia/Taipei');
    $time = date("h:i:s");    
    $currentDate = strtotime($time);
    $futureDate = $currentDate+(10);                
    $formatDate = date("Y-m-d", $futureDate);
    $user_id = $_POST['username']??"David";

   $pass = $_POST['newpass'];
	$cpass = $_POST['cpass'];
	$uppercase = preg_match('@[A-Z]@',$cpass);
	$lowercase = preg_match('@[a-z]@', $cpass);
	$number    = preg_match('@[0-9]@', $cpass);
	$specialChars = preg_match('@[^\w]@', $cpass);

	if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($cpass) <= 8) {
    					echo "<script>
						alert('Password should be at least 8 characters in length and should include at least one uppercase/lowercase letter, one number, and one special character.');
						window.location.href='resetpass.php';
						</script>";
    					
				}
	else{			

            if($pass==$cpass){

              	$message = "CHANGE PASSWORD";
                $query = "INSERT INTO `activity_log`(`Username`, `Activity`, `Time`, `Date`) VALUES ('$user_id','$message','$time','$formatDate')";
                $result = mysqli_query($conn,$query);


                $updatesql = "UPDATE registration set Password ='" . $_POST["newpass"] . "', Confirm_Password ='" . $_POST["cpass"] . "' WHERE Username='" . $user_id . "'";
                $result2 = mysqli_query($conn,$updatesql);
                 echo "<script>
					alert('Password Changed Successfully');
					window.location.href='index.php';
					</script>";
            }

        }


}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Reset Password Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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

	span{
	font-size: 13px;
	margin-left: 10px;
}

.card .btn{
	margin-top: 40px;
}

.card a{
	color: #fff;
	text-decoration: none;
	display: block;
	text-align: center;
	font-size: 13px;
	margin-top: 8px;
}

.eye{
	position: absolute;
	left: 47%;
	top: 300px;
}

#hide1{
	display: none;
}

#hide1a{
	display: none;
}

}

	</style>


	<div class="container">
		<div class="card">
		<h1>Reset Password</h1>
	
	<form method="POST">
		<input type="password" class="input-box" name='old' placeholder="Enter Old Password" id="myInput1" oninvalid="this.setCustomValidity('Old Password is required')" oninput="setCustomValidity('')" required>
		<input type="password" class="input-box" name='newpass' placeholder="Enter New Password" id="myInput2" oninvalid="this.setCustomValidity('New Password is required')" oninput="setCustomValidity('')" required>
		<input type="password" class="input-box" name='cpass' placeholder="Confirm New Password" id="myInput3" oninvalid="this.setCustomValidity('Confirm Password is required')" oninput="setCustomValidity('')" required>

		<span class="eye" onclick="myFunction1()">
						<i id="hide1a" class="fa fa-eye" aria-hidden="true"></i>
						<i id="hide2b" class="fa fa-eye-slash" aria-hidden="true"></i>
					</span>

		<button type="submit" name="new" class="submit-btn">Enter</button>
		<a href="index.php">Return to Login</a>
		</form>
		</div>
		</div>
</form>

<script type="text/javascript">
	function myFunction1(){
			var x = document.getElementById("myInput1");
			var x1 = document.getElementById("myInput2");
			var x2 = document.getElementById("myInput3");
			var y = document.getElementById("hide1a");
			var z = document.getElementById("hide2b");

			if (x.type === 'password') {
				x.type = "text";
				x1.type = "text";
				x2.type = "text";
				y.style.display = "block";
				z.style.display = "none";
			}
			else{
				x.type = "password";
				x1.type = "password";
				x2.type = "password";
				y.style.display = "none";
				z.style.display = "block";	
			}
		}
</script>

</body>
</html>