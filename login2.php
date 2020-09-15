

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
			height: 400px;
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
					<div class="col-md-4">

		                <h2><span> Masuk </span> </h2>

		                <form method="post">

		                    <div class="form-group">
		        			  <input type="text" class="form-control" placeholder="username" aria-label="Username" aria-describedby="addon-wrapping" name="username" id="username">
		                    </div>
		                    <div class="form-group">
		                        <input type="password" class="form-control" placeholder="password" aria-label="password" aria-describedby="addon-wrapping" name="password" id="password">
		                    </div>
		                    <div>
							<?php if( isset($error) ) : ?>
								<p style="color: red; font-style: italic;">username / password salah</p>
							<?php endif; ?>
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
