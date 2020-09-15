<?php 
require 'functions.php';

if( isset($_POST["register"]) ) {

	if( registrasi($_POST) > 0 ) {
		echo "<script>
				alert('user baru berhasil ditambahkan!');
			  </script>";
	} else {
		echo mysqli_error($conn);
	}

}

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="assets/open-iconic-master/font/css/open-iconic-bootstrap.css" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

	<title>Halaman Registrasi</title>
	<style>
		body{
			background-color: black;
		}
		.container{
			border: 3px solid salmon;
			border-radius: 50px;
			width: 700px;
			height: 500px;
			margin: auto;
			margin-top: 100px;
			background-color: magenta;
			padding-right: 50px;
		}

		h1{
			text-align: center;
			font-family: 'Exo 2', sans-serif;
			font-size: 50px;
			text-decoration: underline;
		}
		
		a, a:hover{
			text-decoration: none;
			color: white;
		}
	</style>
</head>
<body>

	<div class="container">
		<h1>Halaman Registrasi</h1>

		<form action="" method="post">

			<ul>
				<h5>Username</h5>
				<label class="sr-only" for="username">Username</label>
			      <div class="input-group mb-2">
			        <div class="input-group-prepend">
			          <div class="input-group-text"><span class="oi oi-people"></span></div>
			        </div>
			        <input type="text" class="form-control" id="username" placeholder="Username" name="username" autofocus="">
			      </div>
			      <h5>Password</h5>
				<label class="sr-only" for="password">Password</label>
			      <div class="input-group mb-2 pass">
			        <div class="input-group-prepend">
			          <div class="input-group-text"><span class="oi oi-key"></span></div>
			        </div>
			        <input type="password" class="form-control" id="password" placeholder="Password" name="password" >
			      </div>
				<!-- <li>
					<label for="password2">konfirmasi password :</label>
					<input type="password" name="password2" id="password2">
				</li> -->
				<h5>Konfirmasi Password</h5>
				<label class="sr-only" for="password2">Password</label>
			      <div class="input-group mb-2 pass">
			        <div class="input-group-prepend">
			          <div class="input-group-text"><span class="oi oi-key"></span></div>
			        </div>
			        <input type="password" class="form-control" id="password2" placeholder="Konfirmasi Password" name="password2" >
			      </div>
			      <br><br>
			      <div class="row">
  					<div class="col-md-12 text-center">
			     		<div class="btn-group">
							<button type="submit" name="register" class="btn btn-info ">Daftar</button>
							<button class="btn btn-danger"><a href="login.php">Kembali</a></button>
						</div>
					</div>
				</div>
			</ul>

		</form>
	</div>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>