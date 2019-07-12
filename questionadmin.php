<!DOCTYPE html>
<html lang="en">
<head>
	<title>Question</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Germania+One">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="cts.css">
	<link rel="shortcut icon" href="brain.png" />
<style>
	.button{
		display: flex; 
		justify-content: center;
		margin : 4px 4px 4px 4px;
		background-color: lightcyan
		border-radius: 2px;
		text-align: center;
	}
	#edit{
		display: flex; 
		justify-content: center;
		font-size: 18px;
		color: white;
		text-align: center;
	}
	.num{
		height: 55px;
		width: 80px;
		margin-bottom: 5px;
		text-align: center
		
	}
	
	table {
	  font-family: arial, sans-serif;
	  border-collapse: collapse;
	  width: 100%;
	}

	td, th {
	  border: 1px solid #111111;
	  text-align: left;
	  padding: 8px;
	}

	tr:nth-child(even) {
	  background-color: #dddddd;
	}

</style>
</head>
<body>
<!--navbar-light= black text | bg-light=background light color-->
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
			<a class="nav-link" href="admin.html">Login</a></li>
	</ul>
</nav>

<div class="bg-what">
<div class="jumbotron what">


		
		
<?php
	//Connect with MYSQL
	$host = "localhost";
	$user = "root";
	$password = "";
	$database = "CTS";
	
	$con = mysqli_connect($host, $user, $password, $database) or die("Cant connect");
	mysqli_select_db($con,$database) or die ("Database not found");
	//Select query
	$sql = "SELECT * FROM question";
	
	$data = mysqli_query($con, $sql);
?>



<div class="container">
<div class="card">
<div class="card-body">
<h4 class="card-title">Questions</h4>
<table>
	<tr style="text-align:center">
		<th>No</th>
		<th>Question</th>
		<th>Answer</th>
		<th>Mark</th>
		<th>Action</th>
	</tr>

<?php	
	while($row = mysqli_fetch_array($data))
	{
		echo "<tr><form action=update2.php method=post>";
		echo "<td>".$row['QuestionID']."</td>";
		// echo "<td><input type=text size=50 name=question value='".$row['Question']."'></td>&nbsp";
		// <td><textarea name="question"> echo $row['Question']; </textarea></td>
		 echo "<td><textarea name=question rows=\"4\" cols=\"80\">" .$row['QuestionTEXT']. "</textarea></td>";	
		 echo "<td><textarea name=answer rows=\"2\" cols=\"10\">" .$row['Answer']. "</textarea></td>";
		 echo "<input type=hidden name=id value='".$row['QuestionID']."'>";
		 echo "<td><input type=text class=num name=mark value='".$row['Mark']."'></td>";
		// echo "<td><input type=submit>";
		 echo "<td><input type=submit class=button style=margin-left:20px name=edit value=Edit>
		 <input type=submit class=button name=delete value=Delete></td>";
		 // echo "<td><button type=submit class=btn btn-primary start></td>";
		 echo "</form></tr>";
	}
 ?>	
 
</table>
</div></div></div>
<div class="container">
	<div class="card">
		<div class="card-body">
		<h4> Add new question</h4>
<form action="update2.php" method="post">
	
	<textarea name="que" cols="100" rows="4" placeholder="Question..."></textarea><br><br>
	<textarea name="ans" cols="100" rows="2" placeholder="Answer..."></textarea><br><br>
	<input type="m" name="m" placeholder="Mark"><br><br>
	<input type="submit" class="button" name="insert" value="Add">
</form>
</div></div></div>
</div></div></div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>