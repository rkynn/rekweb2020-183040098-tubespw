<?php 
session_start();
require 'functions.php';


if( isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
	$id = $_COOKIE['id'];
	$key = $_COOKIE['key'];


	$result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
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

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");


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
	<title>Ryn Automotive || Halaman Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

	<style>
		body,
		html {
			margin: 0;
			padding: 0;
			height: 100%;
			background: black !important;
		}
		.user_card {
			height: 430px;
			width: 600px;
			margin: auto;
			background: #f39c12;
			position: relative;
			display: flex;
			justify-content: center;
			flex-direction: row;
			padding: 10px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			border-radius: 5px;

		}
		.brand_logo_container {
			position: absolute;
			height: 170px;
			width: 170px;
			top: -85px;
			border-radius: 50%;
			background: black;
			padding: 10px;
			text-align: center;
		}
		.brand_logo {
			height: 150px;
			width: 150px;
			border-radius: 50%;
			border: 3px dashed #f39c12;
			background-color: white;
		}
		.form_container {
			margin-top: 90px;
		}

	</style>
</head>
<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="assets/img/logo.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<div class="col-md-12 col-sr-4">

		                <h2><span> Masuk </span> </h2>

		                <div class="error">
		                	<?php if( isset($error) ) : ?>
								<p style="color: red; font-style: italic;">username / password salah</p>
							<?php endif; ?>
		                </div>

		                <form method="post">

		                    <div class="form-group">
		        			  <input type="text" class="form-control" placeholder="username" aria-label="Username" aria-describedby="addon-wrapping" name="username" id="username">
		                    </div>
		                    <div class="form-group">
		                        <input type="password" class="form-control" placeholder="password" aria-label="password" aria-describedby="addon-wrapping" name="password" id="password">
		                    </div>
		                    <div>
		                    </div>
		                    <div class="checkbox">
		                        <label><input type="checkbox"> Remember me ,</label>
		                        <a href="#"> lupa password ?</a>
		                    </div>

								<button type="submit" name="login" class="btn btn-primary">Login</button>
								<button type="submit" name="login" class="btn btn-danger"><a   style="text-decoration: none; color: white;" href="admin/admin.php">Login Sebagai Admin</a></button>

		                
		                </form><br>
						

						<p> Belum memiliki akun? Silahkan <a href="registrasi.php"> Registrasi</a></p>

					</div>
			</div>
		</div>
	</div>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>