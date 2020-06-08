<?php  
	include('connection.php');

	$sql = mysqli_select_db ($conn,'testing') or die("unable to connect to database"); 
	
	$Image1 = $_POST['Image1'];	
	$Image2 = $_POST['Image2'];	
	$Image3 = $_POST['Image3'];	
	$Image4 = $_POST['Image4'];	
	$Image5 = $_POST['Image5'];	
	$Image6 = $_POST['Image6'];	
	$Image7 = $_POST['Image7'];	
	$Image8 = $_POST['Image8'];	
	$Image9 = $_POST['Image9'];	
	$Image10 = $_POST['Image10'];	
	$IP = $_SERVER['REMOTE_ADDR'];
	
	$sqlinsert = "INSERT INTO FinalFormTable (IP, Image1, Image2, Image3, Image4, Image5, Image6, Image7, Image8, Image9, Image10) VALUES ('$IP', '$Image1', '$Image2', '$Image3', '$Image4', '$Image5', '$Image6', '$Image7', '$Image8', '$Image9', '$Image10' )";
	
	if (!mysqli_query($conn, $sqlinsert)) {
		die('error inserting new record');
	}
	
	header('Location: /test/ThankYou.html'); // redirect back to the main site
?>   