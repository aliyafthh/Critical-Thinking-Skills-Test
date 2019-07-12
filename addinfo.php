<?php
	//Connect with MYSQL
	$host = "localhost";
	$user = "root";
	$password = "";
	$database = "CTS";
	
	$con = mysqli_connect($host, $user, $password, $database) or die("Cant connect");
	mysqli_select_db($con,$database) or die ("Database not found");	
	
	if (isset($_POST['insert'])){
		 $GLOBALS['ID'] =$_POST['matricnum'];
		 
		
		 $GLOBALS['Uni'] = $_POST['uni'];
		
		 $GLOBALS['selected_val'] = $_POST['year'];
		
			
		  $GLOBALS['gender'] = $_POST['gender'];
		
		 
		 $GLOBALS['age'] = $_POST['age'];
		
		if(isset($_POST['ethnic'])){
	$GLOBALS['ethnic'] = $_POST['ethnic'];
} else {
	$GLOBALS['ethnic'] = $_POST['ethnic2'];
}
		  
			
			if(isset($_POST['nationality'])){
	$GLOBALS['nationality'] = $_POST['nationality'];
} else {
	$GLOBALS['nationality'] = $_POST['nationality2'];
}
		
		 
	
$sql = "INSERT INTO student (StudentID,University,Year,Gender,Age,Ethnic,Nationality) VALUES ('$ID','$Uni','$selected_val','$gender','$age','$ethnic','$nationality')";
		
		if(empty($ID)){
				echo "Matric number is not inserted";
				header("refresh:1; url=personalinfo.html");
		}		
		elseif(mysqli_query($con, $sql)){			
			header("Location:exam.html");
		}	
		else{
			echo "Failed to save";
			
		}	
	}
			
			
	// $sql = "INSERT into question VALUES No='$_POST[qnum]',Question='$_POST[que]'";
	
		// $sqlrow = "SELECT No FROM question";
		// $datarow = mysqli_query($con,$sqlrow);
		
	// if($no==0){
		// $idrow = mysqli_fetch_array($datarow);
		// $rowcount= count($idrow);
		
		// $sqlnew = "INSERT INTO question (No,Question) VALUES ('$rowcount','$q')";
			
		// if(mysqli_query($con, $sqlnew)){
			
			// echo "Added successfully";
			// header("refresh:1; url=index_cts.php");	
		// }
		// else
			// echo "Failed to add";
			// header("refresh:1; url=index_cts.php");
	// }
	// else{
		
		
		
	
	
?>