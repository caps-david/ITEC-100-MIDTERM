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
//login button
if (isset($_POST['login'])) {
	$username = $_POST['userr'];
	$password_1 = $_POST['passw'];



	if ($username == "ADMIN" && $password_1 == "ADMIN123") {
		echo "<script>
					alert('Welcome, ADMIN');
					window.location.href='landing.php';
					</script>";
	}
	else{
		$query = "SELECT * FROM registration WHERE Username='$username' AND Password='$password_1'";
		$query_run = mysqli_query($conn,$query);


	if (mysqli_fetch_array($query_run)>0) {
		echo "<script>
					alert('You need to enter the Authentication Code first.');
					window.location.href='authentication.php';
					</script>";
		}
	else{
		echo '<script type="text/javascript"> alert("User does not exist")</script>';
		}
	}

}


?>