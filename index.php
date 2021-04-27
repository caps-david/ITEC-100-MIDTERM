<?php include 'validation.php'?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>


	<div class="container">
		<div class="card">
			<div class="inner-box" id="card">
				<div class="card-front">
					<h2>LOGIN HERE</h2>
				<form action="" method="post">
					<input type="text" class="input-box" name="userr" placeholder="Enter Username" oninvalid="this.setCustomValidity('Please enter your username')" oninput="setCustomValidity('')" required>
					<input type="password" class="input-box" name="passw" placeholder="Enter Password" id="myInput" oninvalid="this.setCustomValidity('Please enter your password')" oninput="setCustomValidity('')" required>
					<span class="eye" onclick="myFunction()" style="position: absolute; left: 260px; top: 163px;">
						<i id="hide1" class="fa fa-eye" aria-hidden="true"></i>
						<i id="hide2" class="fa fa-eye-slash" aria-hidden="true"></i>
					</span>
					<button id="btn" type="submit" name="login" class="submit-btn">Login</button>
					<input type="checkbox"><span>Remember Me</span>
				</form>
				<button type="button" class="btn" onclick="openRegister()">I'm New Here</button>
				<a href="resetpass.php">Reset Password</a>
				</div>



				<div class="card-back">
					<h2>REGISTER HERE</h2>
					<form action="registration.php" method="post">
					<input type="text" name="userr" class="input-box" placeholder="Username" oninvalid="this.setCustomValidity('Username is required')" oninput="setCustomValidity('')" required >
					<input type="email" name="email" class="input-box" placeholder="Email" required>
					
					<input type="password" name="passw" class="input-box" placeholder="Password" id="myInput1" oninvalid="this.setCustomValidity('Password is required')" oninput="setCustomValidity('')" required>
					<input type="password" name="conpass" class="input-box" placeholder="Confirm Password" id="myInput2" oninvalid="this.setCustomValidity('Confirm Password is required')" oninput="setCustomValidity('')" required>

					<span class="eye" onclick="myFunction1()" style="position: absolute; left: 47%;">
						<i id="hide1a" class="fa fa-eye" aria-hidden="true"></i>
						<i id="hide2b" class="fa fa-eye-slash" aria-hidden="true"></i>
					</span>
					
					<button type="submit" name="register" class="submit-btn">Register</button>
					<input type="checkbox"><span>Remember Me</span>
				</form>
				<button type="button" class="btn" onclick="openLogin()">I have an account</button>
				
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		var card = document.getElementById("card");
		function openRegister(){
			card.style.transform = "rotateY(-180deg)";
		}
		function openLogin(){	
			card.style.transform = "rotateY(0deg)";
		}


		function myFunction(){
			var x = document.getElementById("myInput");
			var y = document.getElementById("hide1");
			var z = document.getElementById("hide2");

			if (x.type === 'password') {
				x.type = "text";
				y.style.display = "block";
				z.style.display = "none";
			}
			else{
				x.type = "password";
				y.style.display = "none";
				z.style.display = "block";	
			}
		}

		function myFunction1(){
			var x = document.getElementById("myInput1");
			var x1 = document.getElementById("myInput2");
			var y = document.getElementById("hide1a");
			var z = document.getElementById("hide2b");

			if (x.type === 'password') {
				x.type = "text";
				x1.type = "text";
				y.style.display = "block";
				z.style.display = "none";
			}
			else{
				x.type = "password";
				x1.type = "password";
				y.style.display = "none";
				z.style.display = "block";	
			}
		}


	</script>


</body>
</html>