<?php 
session_start();
require '../functions.php';


if( isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
	$id = $_COOKIE['id'];
	$key = $_COOKIE['key'];


	$result = mysqli_query($conn, "SELECT username FROM admin WHERE id = $id");
	$row = mysqli_fetch_assoc($result);


	if( $key === hash('sha256', $row['username']) ) {
		$_SESSION['login'] = true;
	}


}

if( isset($_SESSION["login"]) ) {
	header("Location: index.php");
	exit;
}


if( isset($_POST["login"]) ) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'");


	if( mysqli_num_rows($result) === 1 ) {

		$row = mysqli_fetch_assoc($result);
		if( password_verify($password, $row["password"]) ) {

			$_SESSION["login"] = true;


			if( isset($_POST['remember']) ) {
		
				setcookie('id', $row['id'], time()+60);
				setcookie('key', hash('sha256', $row['username']), time()+60);
			}

			header("Location: index.php");
			exit;
		}
	}

	$error = true;

}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="../assets/open-iconic-master/font/css/open-iconic-bootstrap.css" rel="stylesheet">
	<!-- <link rel="stylesheet" href="css/styleIndexAdmin.css"> -->

	<title>Login Admin</title>

	<style>
		form{
			margin-top: 30px;
		}
		h1 {
			text-align: center;
			color: white;
		}

		p {
			color: white;
			font-style: italic;
			text-align: center;
		}

		.container {
			border: 3px solid salmon;
			border-radius: 5px;
			width: 400px;
			height: 350px;
			background-color: skyblue;
			margin: 20px auto;
		}

		label {
		  display: inline-block;
		  width: 140px;
		}

		body{
			background-color: black;
		}
		img{
			width: 100px;
			height: 100px;
			border-radius: 50%
		}
		.btn{
			display: block;
			margin: auto;
			margin-top: 30px;
		}

		.pass{
			margin-top: 30px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Login Admin</h1>

		<?php if( isset($error) ) : ?>
			<p>Username = admin, Password = admin</p>
		<?php endif; ?>

		<form action="" method="post">
		  <label class="sr-only" for="username">Username</label>
	      <div class="input-group mb-2">
	        <div class="input-group-prepend">
	          <div class="input-group-text"><span class="oi oi-people"></span></div>
	        </div>
	        <input type="text" class="form-control" id="username" placeholder="Username" name="username">
	      </div>

	      <label class="sr-only" for="password">Password</label>
	      <div class="input-group mb-2 pass">
	        <div class="input-group-prepend">
	          <div class="input-group-text"><span class="oi oi-key"></span></div>
	        </div>
	        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
	      </div>

	      <button type="submit" name="login" id="submit" class="btn btn-primary">Login</button>
		  
		</form>
	</div>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>