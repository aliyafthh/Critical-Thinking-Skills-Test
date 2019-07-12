<?php
	//Connect with MYSQL
	$host = "localhost";
	$user = "root";
	$password = "";
	$database = "CTS";
	
	$con = mysqli_connect($host, $user, $password, $database) or die("Cant connect");
	mysqli_select_db($con,$database) or die ("Database not found");	
	
	
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Questions</title>
	<link rel="shortcut icon" href="brain.png" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="cts.css">

	<style>

	</style>
</head>

<body>
	

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
			<a class="nav-link" href="admin.html">Login</a></li>
	</ul>
</nav>
<div class="bgpinfo">
	<div class="jumbotron">


<!--timer-->
		<p>Timer: <span id="demo"></span></p>
<form action="examanswer.php" method="post">
			<!-- card to display question number (display in inline-block) -->
			<h3>SECTION B : CRITICAL THINKING SKILLS ASSESSMENT</h3><br>
				<ol>
				<div class="card">
				
					<div class="form-group">
					<p>Matriculation number : </p>
					<input type="text" class="form-control" name="matricnum"></div>
					
					<h3>Question 1</h3><br>
					
					<img src="q1.jpg" alt="Candle" height=350 width=300 class="center">
					<div class="card-body"><li style="list-style: none;">
					
					There was a power failure in the house. Mrs. Lim lighted up 10 candles. After sometime,
					four candles were blown out by the wind. Later, another three candles were blown out.
					How many candles remained on the following day?<img src="" alt="" id="candle">
					<div class="form-horizontal"><br>
					<label for="q1">Answer : </label>
					<input type="text" class="form-control" name="q1">
				</div></div></div></li>
				<br>
				<div class="card">
					<h3>Question 2</h3><br>
					<img src="Q2.jpg" alt="Handshake" height=300 width=300 class="center">
					<div class="card-body"><li style="list-style: none;">There are 20 people who love to solve puzzles. They met to solve puzzles together.
					Among them, three are friends (i.e., already known each other). During their first
					face-to-face meeting, they shook hands with each other (with unknowns only) except for
					the three who were already known to each other.
					<br><p>Question: How many handshaking took place in this meeting?</p>
					<div class="form-horizontal">
					<label for="q2"> Answer : </label><br>
					<input type="text" name="q2" class="form-control col-sm-4" id="q2">
				</div></div></div></li>
				<br>
				<div class="card">
					<h3>Question 3</h3><br>
					<div class="row">
  <div class="column">
    <iframe src="https://giphy.com/embed/l1J3QnoRtJjvUCL2o" width="480" height="360" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/animation-bird-l1J3QnoRtJjvUCL2o">via GIPHY</a></p>
  </div>
  <div class="column">
   <iframe src="https://giphy.com/embed/3oKIPpbE8BVDbv6Ya4" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/dancing-party-disco-3oKIPpbE8BVDbv6Ya4">via GIPHY</a></p>
  </div>

</div>


					<div class="card-body"><li style="list-style: none;">There are altogether 100 birds and turtles. The total number of legs is 276. <br><br>Question: How many birds and turtles are there, respectively?
						<br><br> Answer:<br><br>

						<form class="form-inline">
  						<label for="numbirds" class="mr-sm-2">Number of birds: </label>
  						<input type="text" name="q3A" class="form-control mb-2 mr-sm-2" id="numbirds">
							<label for="numturtles" class="mr-sm-2">Number of turtles: </label>
							<input type="text" name="q3B" class="form-control mb-2 mr-sm-2" id="numturtles">
						</form></div></div>
						<br>
						
						
						<div class="card">
					<h3>Question 4</h3><br>
					
					<div class="card-body"><li style="list-style: none;">Move the following numbers to make them equal, mathematically. Write your answer below.
					<br>
					<br><h4><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     2&nbsp;&nbsp;   4&nbsp  =&nbsp; 6&nbsp;&nbsp;   7&nbsp;&nbsp;   </b></h4><br>
					
					<div class="form-horizontal"><br>
					<label for="q4">Answer : </label>
					<input type="text" class="form-control col-sm-4" name="q4">
				</div></div></div></li>
				<br>
								<div class="card">
									<h3>Question 5</h3><br>
									<div class="card-body"><li style="list-style: none;">There are four (4) students: A, B, C, and D. They are discussing about their academic results. A says: If I get distinction, then B also gets distinction. B says: If I get distinction, then C also gets distinction. C says: If I get distinction, then D also gets distinction. All the four students are telling the truth. However, among these four students, only two students get distinctions. Who are the two students who got distinctions?<br><br>

 Answer:

  <select name="q5">
  <option value="A and B">A & B</option>
  <option value="A and C">A & C</option>
  <option value="A and D">A & D</option>
  <option value="B and C">B & C</option>
  <option value="C and D">B & D</option>
  <option value="D and B">C & D</option>

</select>

</div></div>
										<br>

										<div class="card">
											<h3>Question 6</h3><br>
											<div class="card-body"><li style="list-style: none;">There are three (3) boxes: a gold box, a silver box, and a red box. On top of each of the boxes, there is a sentence. In one of these three boxes, only one box contains a photo. The sentence on the gold box says: The photo is not inside the silver box. The sentence on the silver box says: The photo is not inside this box. The sentence on the red box says: The photo is inside this box. Among these three sentences, at least one sentence is true, and at least one sentence is false. <br><br>
												Question: Which box contains the photo?<br><br>
												
												
												
				
			 <!-- use to choose only one answer at a time-->
				<div class="form-group">
					<label for="q6">Answer :</label>
					<div class="radio">
						<label><input type="radio" name="q6" value="Gold">Gold</label>
						<img src="gold.jpg" alt="Gold" height=70 width=70>
						</div>
					<div class="radio">
						<label><input type="radio" name="q6" value = "Silver">Silver</label>
						<img src="silver.jpg" alt="Silver" height=100 width=100>
						</div>
						
						<div class="radio">
						<label><input type="radio" name="q6" value = "Red">Red</label>
						<img src="red.jpg" alt="Red" height=100 width=100>
						</div></div></div></form>
												<br>
												</div>
												<br>
												
												
												<div class="card">
														<h3>Question 7</h3><br>
														
														<div class="card-body"><li style="list-style: none;"><p>Two thin wooden sticks take one (1) hour to complete burning, respectively. 
														What is the method you will use to measure 15 minutes of burning time? Describe briefly and draw diagram(s) to illustrate your answer.
														<br>
														

														</p><br>

															<label for="answer10">Answer:</label>
															<textarea class="form-control" name="q7" rows="4" id="comment"></textarea></div></div>
												
												<br>

												<div class="card">
													<h3>Question 8</h3><br>
													<div class="card-body"><li style="list-style: none;">There are four people: A, B, C, and D. They are predicting the future career for each other: dancer, fortune teller, novelist, and TV host.  Based on their statements given below, only the statement given by the fortune teller is true.<br>
													<br>A: B will absolutely never become a dancer.
													<br>B: C will become a fortune teller.
													<br>C: D will never become a TV host.
													<br>D: I’ll marry Mr. P<br>
													<br>Question: What are the respective career of A, B, C, and D, and will D marry Mr. P?<br>
													<br>Answer:</p>
													
								  				<label for="careerA" class="mr-sm-2">The career of A: </label>
												
												 <select name="q8A">
													<option value="Dancer">Dancer</option>
													<option value="Fortune Teller">Fortune Teller</option>
													<option value="Novelist">Novelist</option>
													<option value="TV Host">TV Host</option>
												</select>
												
								  			<!--<input type="text" name="q8A" class="form-control mb-2 mr-sm-2" id="careerA">-->

													<label for="careerB" class="mr-sm-2">B: </label>
													
													<select name="q8B">
													<option value="Dancer">Dancer</option>
													<option value="Fortune Teller">Fortune Teller</option>
													<option value="Novelist">Novelist</option>
													<option value="TV Host">TV Host</option>
													</select>
													
												<!--	<input type="text" name="q8B" class="form-control mb-2 mr-sm-2" id="careerB"> -->

													<label for="careerC" class="mr-sm-2">C: </label>
													<select name="q8C">
													<option value="Dancer">Dancer</option>
													<option value="Fortune Teller">Fortune Teller</option>
													<option value="Novelist">Novelist</option>
													<option value="TV Host">TV Host</option>
													</select>
												<!--	<input type="text" name="q8C" class="form-control mb-2 mr-sm-2" id="careerC">-->

													<label for="careerD" class="mr-sm-2">D: </label>
													<select name="q8D">
													<option value="Dancer">Dancer</option>
													<option value="Fortune Teller">Fortune Teller</option>
													<option value="Novelist">Novelist</option>
													<option value="TV Host">TV Host</option>
													</select>
												<!--	<input type="text" name="q8D" class="form-control mb-2 mr-sm-2" id="careerD">-->

													
													<br>
													
													<div class="form-group">
					
					<div class="radio">
						<label><input type="radio" name="q8E" value="Marry"></label>D will marry Mr.P</div>
					<div class="radio">
						<label><input type="radio" name="q8E" value = "Not Marry">D will NOT marry Mr.P</label></div></div>
													
												</div></div></li>
												<br>

												<div class="card">
													<h3>Question 9</h3><br>
													<img src="q9.jpg" alt="Brothers" height=500 width=600>
													<div class="card-body"><li style="list-style: none;">There are two brothers, one of whom is fat and the other is thin. The elder brother will tell the truth in the morning, and will tell lie in the afternoon. The younger brother will be the reverse (i.e., tells lie in the morning, and tells the truth in the afternoon).
													<br>
													<br>
													One man asked these two brothers: Who is the elder brother?<br>
													The fat one said: I’m the elder brother.<br>
													The thin one also said: I’m the elder brother.<br>
													The man asked again: What is the time now?<br>
													The fat one said: Almost noon.<br>
													The thin one also said: Already noon.<br>
													<br>
													Question: What is the time now (morning or afternoon), and who is the elder brother (the fat one or the thin one)?
													<br><br> Answer:

													<div class="form-horizontal"><br>
													<div class="form-group">
					<label for="time">Time :</label>
					<div class="radio">
						<label><input type="radio" name="time" value="Morning">Morning</label></div>
					<div class="radio">
						<label><input type="radio" name="time" value = "Afternoon">Afternoon</label></div></div>

<br>

<label for="brother">Elder brother :</label>
					<div class="radio">
						<label><input type="radio" name="brother" value="Fat One">Fat One</label></div>
					<div class="radio">
						<label><input type="radio" name="brother" value = "Thin One">Thin One</label></div></div>

													</div></div>
													<br>

													<div class="card">
														<h3>Question 10</h3><br>
														<img src="door.jpg" alt="Doors" height=500 width=600>
														<div class="card-body"><li style="list-style: none;"><p>In a room, there are two men. One tells the truth and the other tells lie. <br>
														You're in the room, and you want to leave the room from one of the exits (doors). <br>
														There is a lion behind one of the exit. <br>
														The other exit is safe.<br>
														<br>
														What is the question (<b>ONE question ONLY</b>) you will ask one of the men to know which is the safe exit?

														</p></b></h4><br>

															<label for="answer10">Answer:</label>
															<textarea class="form-control" name="q10" rows="4" id="comment"></textarea></div></div>
															<input type="submit" class="button" name="save" value="Next">

</div>
	</div>



</div></div>


</form>

<main>
</main>
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Visit us at <a href="cts@um.edu.my" data-toggle="tooltip" title="Visit w3schools">cts@um.edu.my</a></p>
</footer>
 <script src="timer.js"></script>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
