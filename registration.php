<?php 

session_start();

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'user');

if (isset($_POST['register'])) {
	$name = $_POST['userr'];
	$email = $_POST['email'];
	$pass = $_POST['passw'];
	$cpass = $_POST['conpass'];
	$uppercase = preg_match('@[A-Z]@',$cpass);
	$lowercase = preg_match('@[a-z]@', $cpass);
	$number    = preg_match('@[0-9]@', $cpass);
	$specialChars = preg_match('@[^\w]@', $cpass);

	if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($cpass) <= 8) {
    					echo "<script>
						alert('Password should be at least 8 characters in length and should include at least one uppercase/lowercase letter, one number, and one special character.');
						window.location.href='index.php';
						</script>";
    					
				}

	else{

	if($pass==$cpass){
		$query = "INSERT INTO `registration`(`Username`, `Email`, `Password`, `Confirm Password`) VALUES ('$name', '$email', '$pass', '$cpass')";
		$query_run = mysqli_query($con, $query);

		if ($query_run) {
			echo "<script>
			alert('Successfully Registered');
			window.location.href='index.php';
			</script>";
		}
		else{
			echo "<script>
			alert('Registration Failed');
			window.location.href='index.php';
			</script>";
		}
	}
		
		else{
		echo "<script>
			alert('Password and Confirm Password does not match');
			window.location.href='index.php';
			</script>";
		}
	}

}


?>