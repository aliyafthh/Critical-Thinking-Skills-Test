<?php
//Connect with MYSQL
$host = "localhost";
$user = "root";
$password = "";
$database = "CTS";

$con = mysqli_connect($host, $user, $password, $database) or die("Cant connect");
mysqli_select_db($con,$database) or die ("Database not found");

if (isset($_POST['save'])){
	
$ID = $_POST['matricnum'];
echo $ID;
   $GLOBALS['Q1'] =$_POST['q1'];
   echo $Q1;

   $GLOBALS['Q2'] = $_POST['q2'];
   echo $Q2;

   $GLOBALS['Q3a'] = $_POST['q3A'];
   echo $Q3a;
   
   $GLOBALS['Q3b'] = $_POST['q3B'];
   echo $Q3b;


    $Q4 = $_POST['q4'];
	echo $Q4;


   $GLOBALS['Q5'] = $_POST['q5'];
   echo $Q5;

   $GLOBALS['Q6'] = $_POST['q6'];
   echo $Q6;

   $GLOBALS['Q7'] = $_POST['q7'];
   echo $Q7;


   $GLOBALS['Q8a'] = $_POST['q8A'];
   echo $Q8a;
   $GLOBALS['Q8b'] = $_POST['q8B'];
   echo $Q8b;
   $GLOBALS['Q8c'] = $_POST['q8C'];
   echo $Q8c;
   $GLOBALS['Q8d'] = $_POST['q8D'];
   echo $Q8d;
   $GLOBALS['Q8e'] = $_POST['q8E'];
   echo $Q8e;

   $GLOBALS['Q9a'] = $_POST['brother'];
   echo $Q9a;
   $GLOBALS['Q9b'] = $_POST['time'];
	echo $Q9b;
   $GLOBALS['Q10'] = $_POST['q10'];
   echo $Q10;







$sql = "INSERT INTO answer (studentID,Q1, Q2, Q3A, Q3B, Q4, Q5, Q6, Q7, Q8A, Q8B, Q8C, Q8D, Q8E, Q9A, Q9B, Q10) VALUES ('$ID','$Q1','$Q2','$Q3a','$Q3b','$Q4','$Q5','$Q6','$Q7','$Q8a','$Q8b','$Q8c','$Q8d','$Q8e', '$Q9a','$Q9b','$Q10')";

  if(empty($Q1)||empty($Q2)||empty($Q3a)||empty($Q3b)||empty($Q4)||empty($Q5)||empty($Q6)||empty($Q7)||empty($Q8a)||empty($Q8b)||empty($Q8c)||empty($Q8d)||empty($Q8e)||empty($Q9a)||empty($Q9b)||empty($Q10)){
      echo "Incomplete answer";
      //header("refresh:1; url=question.html");
  }
  elseif(mysqli_query($con, $sql)){
    header("Location:submitted.html");
	
  }
  else{
    echo "Failed to save";

  }
}


?>
