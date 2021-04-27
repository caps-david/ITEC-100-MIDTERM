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

   $sql = "SELECT * FROM activity_log";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result)<=0) {
				   echo "No Data Found";
				}
				else {
?>
<!DOCTYPE html>
<html>
<head>
<title>Activity Log</title>
</head>
<body>
<h2>Activity Log</h2>
<button id="myButton">Back</button>
<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "landing.php";
    };
</script>
<style type="text/css">
th, td {
  padding: 15px;
  text-align: left;
}
th, td {
  border-bottom: 1px solid #ddd;
}
tr:hover {background-color: #f5f5f5;}

th {
  background-color: black;
  color: white;
}
body{
	margin: 0;
	padding: 0;
	font-family: 'PT Sans Narrow', sans-serif;
}
table{
	width: 100%;
	height: 100%;
	margin-top: 80px;
}

button{
	width: 100px;
	height: 50px;
	float: right;
	background: #000;
	color: #fff;
	margin-top: 20px;
	margin-bottom: 20px;
	margin-right: 20px;
	font-weight: 500;
	text-align: center;
	text-decoration: none;
  	font-size: 1.2em;
  	letter-spacing: 1px;
  	animation: fadeInBottom 0.5s linear forwards;
  	animation-delay: 5.5s;
  	cursor: pointer;
}

h2{
	position: absolute;
	margin-left: 20px;
	margin-top: 20px;
	font-size: 40px;
	font-weight: 700;
}
	

</style>
<table>
	<tr>
		<th>Username</th>
		<th>Activity</th>
		<th>Time</th>
		<th>Date</th>
							
	</tr>	
	<?php
		while ($row=mysqli_fetch_assoc($result)) {
	?>

	<tr>
		<td><?=$row['Username'];?></td>
		<td><?=$row['Activity'];?></td>
		<td><?=$row['Time'];?></td>
		<td><?=$row['Date'];?></td>
	</tr>

<?php
}
?>

</table>
</body>
</html>

<?php
}
?>