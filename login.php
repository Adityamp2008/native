<?php
session_start();
include "config.php";

if (isset($_POST['login'])) {
    $username = $_POST['uname'];
    $password = $_POST['pass'];
    $query = "SELECT * FROM data WHERE uname = '$username' AND pass = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['uname'] = $username;
        header("Location: index.php");
        exit();
    } else {
        echo "<script>alert('Username atau Password salah!');</script>";
    }
}
?>


<!doctype html>
<html lang="en">
  <head>
  	<title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="frontend/css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(frontend/images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login </h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Have an account?</h3>
		      	<form action="" method="POST" class="signin-form">
		      		<div class="form-group">
		      			<input type="text" class="form-control" name="uname" placeholder="Username" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" name="pass" class="form-control" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" name="login" class="form-control btn btn-primary submit px-3">Sign In</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
	            </div>
	          </form>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="frontend/js/jquery.min.js"></script>
  <script src="frontend/js/popper.js"></script>
  <script src="frontend/js/bootstrap.min.js"></script>
  <script src="frontend/js/main.js"></script>

	</body>
</html>

