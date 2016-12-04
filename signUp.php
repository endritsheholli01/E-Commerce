<?php
	session_start();

	$db = mysqli_connect("localhost", "root" , "" , "jewelary");
	
	if (isset($_POST['register_btn'])){
		//session_start();
		$name = ($_POST['name']);
		$surname = ($_POST['surname']);
		$email = ($_POST['email']);
		$username = ($_POST['username']);
		$password = ($_POST['password']);
		$password2 = ($_POST['password2']);
		
		if ($password  == $password2) {
			$password = md5($password);
			$sql = "INSERT INTO users(name, surname, email, password , username) VALUES('$name', '$surname', '$email', '$password', '$username')";
			mysqli_query($db, $sql);
			$_SESSION['message'] = "You are now logged in";
			$_SESSION['username'] = $username;
			header("location: home.php");
		}else{
			$_SESSION['message'] = "The two passwords do not match";
		}
	}

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>SignUp</title>
		<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
		<style type="text/css">
			.form-control {
				position: relative;
				font-size: 16px;
				height: auto;
				padding: 10px;
				@include box-sizing(border-box);
				&:focus {
					z-index: 2;
				}
			}
			body {
				background: url(http://i.imgur.com/GHr12sH.jpg) no-repeat center center fixed;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
			}
			.login-form {
				margin-top: 60px;
			}
			form[role=login] {
				color: #5d5d5d;
				background: #f2f2f2;
				padding: 26px;
				border-radius: 10px;
				-moz-border-radius: 10px;
				-webkit-border-radius: 10px;
			}
			form[role=login] img {
				display: block;
				margin: 0 auto;
				margin-bottom: 35px;
			}
			form[role=login] input,
			form[role=login] button {
				font-size: 18px;
				margin: 16px 0;
			}
			form[role=login] > div {
				text-align: center;
			}	
			.form-links {
				text-align: center;
				margin-top: 1em;
				margin-bottom: 50px;
			}
			.form-links a {
				color: #fff;
			}
			input.pw { -webkit-text-security: disc; }
		</style>
		<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">  
			<div class="row" id="pwd-container">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<section class="login-form">
						<form method="post" action="signUp.php" role="login">
							<input type="text" name="name" placeholder="Name" required class="form-control input-lg"  />
							<input type="text" name="surname" placeholder="Surname" required class="form-control input-lg"  />
							<input type="email" name="email" placeholder="Email" required class="form-control input-lg"  />
							<input type="text" name="username" placeholder="Username" required class="form-control input-lg"  />
							<input type="password" name="password" class="form-control input-lg" id="password" placeholder="Password" required="" />
							<input type="text" name="password2" placeholder="Retype Password" required class="form-control input-lg pw" value="secret"  />
							<div class="pwstrength_viewport_progress"></div>
							<button type="submit" name="register_btn" class="btn btn-lg btn-primary btn-block"value="Register">Sign Up</button>
						</form>
						<div class="form-links">
							<a href="#">www.buki.com</a>
						</div>
					</section>  
				</div>
				<div class="col-md-4"></div>
			</div>
		</div>
		
	</body>
</html>