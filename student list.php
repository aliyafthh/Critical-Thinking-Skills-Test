<!DOCTYPE html>
<html>
<head>
<title>Student List</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Germania+One">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="cts.css">
	<link rel="shortcut icon" href="brain.png" />
	<style>
	<script src="https://www.w3schools.com/lib/w3.js"></script>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

	</style>
	
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
</head>

			


<body>
<!put top margin for container-fluid>
<div class="bg-what">
<div class="container">
	<div class="jumbotron what">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Student List</h4>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CTS";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT studentID,Q1, Q2, Q3A, Q3B, Q4, Q5, Q6, Q7, Q8A, Q8B, Q8C, Q8D, Q8E, Q9A, Q9B, Q10 FROM Answer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo"<table>";
 echo" <tr>";
	
  echo"</tr>";
    echo "<table style=margin-right:30px><tr><th>MatricNo</th><th>Q1</th><th>Q2</th><th>Q3A</th><th>Q3B</th><th>Q4</th><th>Q5</th><th>Q6</th><th>Q7</th><th>Q8A</th><th>Q8B</th><th>Q8C</th><th>Q8D</th><th>Q8E</th><th>Q9A</th><th>Q9B</th><th>Q10</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		$matric = $row["studentID"];
		
		// pass ID to personalinfoadmin.php
        echo "<tr class = item><td>"."<a href =personalinfoadmin.php?ID=$matric>" . $row["studentID"]. "</td><td>" . $row["Q1"]."</td><td>" . $row["Q2"]. "</td><td>". $row["Q3A"]. "</td><td>". $row["Q3B"]. "</td><td>".
		 $row["Q4"]."</td><td>" . $row["Q5"]. "</td><td>". $row["Q6"]. "</td><td>". $row["Q7"]. "</td><td>". $row["Q8A"]."</td><td>" . $row["Q8B"]. "</td><td>". $row["Q8C"]. "</td><td>". $row["Q8D"]. "</td><td>".
		  $row["Q8E"]."</td><td>" . $row["Q9A"]. "</td><td>". $row["Q9B"]. "</td><td>". $row["Q10"]. "</td></tr>";
    }
	echo "</table>";
    }
    
    
 else {
    echo "0 results";
}

$conn->close();
?> 
</div></div></div>

</div>
</div>
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