<?php
	//Connect with MYSQL
	$host = "localhost";
	$user = "root";
	$password = "";
	$database = "CTS";
	
	$con = mysqli_connect($host, $user, $password, $database) or die("Cant connect");
	mysqli_select_db($con,$database) or die ("Database not found");	
	
	if (isset($_POST['edit'])){
	//Select query
	$sql = "UPDATE question SET QuestionTEXT='$_POST[question]', Answer = '$_POST[answer]', Mark = '$_POST[mark]' WHERE QuestionID=$_POST[id]";
	
		//Execute query
		if(mysqli_query($con, $sql)) {
			echo "Updated successfully";
			header("refresh:1; url=questionadmin.php");
		}
		else
			echo "Failed to update";
			header("refresh:1; url=questionadmin.php");
	}
	
	if (isset($_POST['insert'])){
		$q =$_POST['que'];
		$a = $_POST['ans'];
		$m = $_POST['m'];
		
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
		$sql = "INSERT INTO question (QuestionTEXT,Answer,Mark) VALUES ('$q','$a','$m')";
		
		if(empty($q)){
				echo "Question is not inserted";
				header("refresh:1; url=questionadmin.php");
		}		
		elseif(mysqli_query($con, $sql)){			
			echo "Added successfully";
			header("refresh:1; url=questionadmin.php");	
		}	
		else{
			echo "Failed to add";
			header("refresh:1; url=questionadmin.php");
		}
		
	}	
	
	if(isset($_POST['delete'])){
		// $id = $_POST['id'];
		
		// $sql = "DELETE FROM question WHERE id=$id";
		$sql = "DELETE FROM question WHERE QuestionID=$_POST[id]";
		
		if(mysqli_query($con, $sql)){
			echo "Deleted successfully";
			header("refresh:1; url=questionadmin.php");
		}
		else
			echo "Delete unsucessful";
			header("refresh:1; url=questionadmin.php");
	}	
?>