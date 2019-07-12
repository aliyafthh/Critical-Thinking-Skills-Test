

<!DOCTYPE html>
<html>
<head>
	<title>Personal Information</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="cts.css">
	<link rel="shortcut icon" href="brain.png" />
	<style>

	</style>
</head>



<body>

	<!navbar-light= black text | bg-light=background light color>
	<nav class="navbar navbar-expand-lg fixed-top">

	<!navbar brand = header for navbar (make things stand out)| logo>
	<a class="navbar-brand" href="index.html"><img src="logo.jpg" class="rounded-circle" width="45" height="37"> CTS</a>

	<ul class="navbar-nav mr-auto">
		<li class="nav-item">
			<a class="nav-link" href="student list.php">Student List</a></li>
		<li class="nav-item">
			<a class="nav-link" href="questionadmin.php">Question</a></li>
	</ul>
	<ul class="navbar-nav justify-content-end">
		<li class="nav-item">
			<a class="nav-link" href="admin.html">Logout</a></li>
	</ul>
</nav>
<!--form of information-->
<main>
<div class="bgpinfo">
	<div class="jumbotron">
		
		<h4>SECTION A : RESPONDENT PROFILE</h4>
		<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "CTS";
		session_start();
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 	
			
		$sql = "SELECT * FROM student";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
			if(isset($_GET['ID'])){
				
			if($_GET['ID'] == $row["StudentID"]){
				
			echo "<ol><li><p>Registration / Matriculation number : " . $row["StudentID"]. "</p>";
					
					"</li>";
					

			echo	"<li><p>Name of University : ".$row["University"]."</p>";
				
					"</li>";
				

			echo	"<li>";
				if($row["Year"]== 1){
					echo "<p>Year of Study (First, Second, Third, etc) : First </p>";
				}
				else if($row["Year"]==2){
					echo "<p>Year of Study (First, Second, Third, etc) : Second </p>";
				}
				else{
					echo "<p>Year of Study (First, Second, Third, etc) : Third </p>";
				}
					"<br></li>";
					
    
			echo	"<li>
					<p>Gender : " . $row["Gender"]."</p>";
					
					"<br></li>";
					
			echo	"<li>";
			echo	"<p>Age Group : " . $row["Age"]."</p>";
			
				"</li>";
				
			echo	"<li>";
			echo	"<p>Ethnic Group : ". $row["Ethnic"]."</p>";
				
				"</li><br>";
				
			echo	"<li>
				<p>Nationality : ". $row["Nationality"]."</p>";
				
				"</li><br>";
				
			/*	<li>
				<p>Past/last year's examination results (eg : 2016, 2017, 2018, etc) :</p>
			</li>
				<ol>
				
				<label for="lastyear" class="mb-2 mr-xs-2">Year of Examination :</label>
				<br>
				
				
					<li>
						<div class="row">
						<div class="col">
							<label for="course1" class="mb-2 mr-xs-2">Course Code and Name :</label>
							<br>
						</div>
						<div class="col">
							<label for="grade1" class="mb-2 mr-xs-2">Grade :</label>
							<br>
						</div></div></li>
					<li>
						<div class="row">
						<div class="col">
							<label for="course2" class=" mb-2 mr-xs-2">Course Code and Name :</label>
							<br>
						</div>
						<div class="col">
							<label for="grade2" class=" mb-2 mr-xs-2">Grade :</label>
							<br>
						</div></div></li>
					<li>
						<div class="row">
						<div class="col">
							<label for="course3" class=" mb-2 mr-xs-2">Course Code and Name :</label>
							<br>
						</div>
						<div class="col">
							<label for="grade3" class=" mb-2 mr-xs-2">Grade :</label>
							<br>
						</div></div></li>
					<li>
						<div class="row">
						<div class="col">
							<label for="course4" class=" mb-2 mr-xs-2">Course Code and Name :</label>
							<br>
						</div>
						<div class="col">
							<label for="grade4" class=" mb-2 mr-xs-2">Grade :</label>
							<br>
						</div></div></li>
					<li>
						<div class="row">
						<div class="col">
							<label for="course5" class=" mb-2 mr-xs-2">Course Code and Name :</label>
							<br>
						</div>
						<div class="col">
							<label for="grade5" class=" mb-2 mr-xs-2">Grade :</label>
							<br>
						</div></div></li>
					<li>
						<div class="row">
						<div class="col">
							<label for="course6" class=" mb-2 mr-xs-2">Course Code and Name :</label>
							<br>
						</div>
						<div class="col">
							<label for="grade6" class=" mb-2 mr-xs-2">Grade :</label>
							<br>
						</div></div></li>
					<li>
						<div class="row">
						<div class="col">
							<label for="course7" class=" mb-2 mr-xs-2">Course Code and Name :</label>
							<br>
						</div>
						<div class="col">
							<label for="grade7" class=" mb-2 mr-xs-2">Grade :</label>
							<br>
						</div></div></li>
					<li>
						<div class="row">
						<div class="col">
							<label for="course8" class=" mb-2 mr-xs-2">Course Code and Name :</label>
							<br>
						</div>
						<div class="col">
							<label for="grade8" class=" mb-2 mr-xs-2">Grade :</label>
							<br>
						</div></div></li>
					<li>
						
							<div class="row">
							<div class="col">
								<label for="gpalast" class=" mb-2 mr-xs-2">GPA (last semester) :</label>
								<br>
							</div>
							<div class="col">
								<label for="cgpalast" class=" mb-2 mr-xs-2">CGPA (last semester) :</label>
								<br>
					</div></div>
				</li></ol><br>
			<li>This year's examination results  :</li>	<br>
			<ol>
			
				<label for="thisyear" class="mb-2 mr-xs-2">Year of Examination (eg : 2016, 2017, 2018, etc) :</label>
				
				<br>
			
				<label for="sem">Semester (First,second,etc) :</label>
				<br>
			
				<li>
					<div class="row">
					<div class="col">
						<label for="course11" class=" mb-2 mr-xs-2">Course Code and Name :</label>
						<br>
					</div>
					<div class="col">
					<label for="grade11" class=" mb-2 mr-xs-2">Grade :</label>
					<br>
				</div></div></li>
				<li>
					<div class="row">
					<div class="col">
						<label for="course12" class=" mb-2 mr-xs-2">Course Code and Name :</label>
						<br>
					</div>
					<div class="col">
					<label for="grade12" class=" mb-2 mr-xs-2">Grade :</label>
					<br>
				</div></div></li>
				<li>
					<div class="row">
					<div class="col">
						<label for="course13" class=" mb-2 mr-xs-2">Course Code and Name :</label>
						<br>
					</div>
					<div class="col">
					<label for="grade13" class=" mb-2 mr-xs-2">Grade :</label>
					<br>
				</div></div></li>
				<li>
					<div class="row">
					<div class="col">
						<label for="course14" class=" mb-2 mr-xs-2">Course Code and Name :</label>
						<br>
					</div>
					<div class="col">
					<label for="grade14" class=" mb-2 mr-xs-2">Grade :</label>
					<br>
				</div></div></li>
				<li>
					<div class="row">
					<div class="col">
						<label for="course15" class=" mb-2 mr-xs-2">Course Code and Name :</label>
						<br>
					</div>
					<div class="col">
					<label for="grade15" class=" mb-2 mr-xs-2">Grade :</label>
					<br>
				</div></div></li>
				<li>
					<div class="row">
					<div class="col">
						<label for="course16" class=" mb-2 mr-xs-2">Course Code and Name :</label>
						<br>
					</div>
					<div class="col">
					<label for="grade16" class=" mb-2 mr-xs-2">Grade :</label>
					<br>
				</div></div></li>
				<li>
					<div class="row">
					<div class="col">
						<label for="course17" class=" mb-2 mr-xs-2">Course Code and Name :</label>
						<br>
					</div>
					<div class="col">
					<label for="grade17" class=" mb-2 mr-xs-2">Grade :</label>
					<br>
				</div></div></li>
				<li>
					<div class="row">
					<div class="col">
						<label for="course18" class=" mb-2 mr-xs-2">Course Code and Name :</label>
						<br>
					</div>
					<div class="col">
					<label for="grade18" class=" mb-2 mr-xs-2">Grade :</label>
					<br>
				</div></div></li>
				<li>
					
						<div class="row">
						<div class="col">
							<label for="gpacur" class=" mb-2 mr-xs-2">GPA (current semester)  :</label>
							<br>
						</div>
					<div class="col">
						<label for="cgpacur" class=" mb-2 mr-xs-2">CGPA (current semester)  :</label>
						<br>
					</div></div>
				</li>
			</ol>*/"<br></ol>";
				
				"<a href=q&a.html class=next><center>Next &raquo;</center></a>";

			"</ol>";
		
			}
			else;
			} }
		} ?>
</div></div>
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
