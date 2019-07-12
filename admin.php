<?php 
$user=$_POST['user'];
$pass=$_POST['pass'];
$error="";
$success="";
if(isset($_POST['submit'])){
	if($user=="admin"){
		if($pass=="pass"){
			header('location:student list.php');
			
		}
		else{
			$error="Invalid Username or Password!";
			$success="";
		}
	}
	else{
		$error="Invalid Username or Password!";
		$success="";
	}
} ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Germania+One">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="cts.css">
	<link rel="shortcut icon" href="brain.png" />
	<style>

	</style>
</head>

<body>
<header></header>



	<!--navbar-light= black text | bg-light=background light color-->
	<nav class="navbar navbar-expand-lg fixed-top">

	<!--navbar brand = header for navbar (make things stand out)| logo-->
	<a class="navbar-brand" href="index.html"><img src="logo.jpg" class="rounded-circle" width="45" height="37"> CTS</a>

	<ul class="navbar-nav mr-auto">
		
		<li class="nav-item">
			<a class="nav-link" href="personalinfo.html">Test</a></li>
	</ul>
	<ul class="navbar-nav justify-content-end">
		<li class="nav-item">
			<a class="nav-link" href="admin.php">Login</a></li>
	</ul>
</nav>

<!--put top margin for container-fluid-->
<div class="bg-what">
	<div class="jumbotron what">
	<div class="card mx-auto log" style="width:30em;height:40em;">
		<div class="card-body">
			<h1 class="card-title text-center">Login to Your Account</h1>
			<h3 class="text-center"><img src="logo.jpg" class="rounded-circle" width="45" height="37"> Critical Thinking Skill</h3>

		<br><br>

		<form method="POST">
			<div class="form-group">
				<input type="text" class="form-control"  placeholder="Enter username" name="user">
		</div>
			<div class="form-group">
			<input type="password" class="form-control" placeholder="Enter password" name="pass"></div>

			<?php echo $error; ?>

		 <div class="form-group form-check">
			<label class="form-check-label">
			<input class="form-check-input" type="checkbox" name="remember"> Keep me logged in
		</label><span style="margin-left : 140px;"><a href="#">Forget password?</a></span></div>

<!--submit button with styling-->
		<br>

		<input type="submit" name="submit" value="login" class="btn btn-primary login" style="color:white">


		</div></div>
	</div></div>


<main>
</main>
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Visit us at <a href="cts@um.edu.my" data-toggle="tooltip" title="Visit w3schools">cts@um.edu.my</a></p>
</footer>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
