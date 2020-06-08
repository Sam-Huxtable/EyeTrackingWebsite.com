<?php  
	include('connection.php');

	$sql = mysqli_select_db ($conn,'testing') or die("unable to connect to database"); 
	
	$xData = $_GET['postxData'];
	$yData = $_POST['postyData'];
	$IP = $_SERVER['REMOTE_ADDR'];
	$serialized_IP = serialize($IP);
	$serialized_xData = serialize($xData);
	$serialized_yData = serialize($yData);
	
	$sqlinsert = "INSERT INTO gazedata (IP, xData, YData) VALUES ('$serialized_IP', '$serialized_xData', '$serialized_yData')";
	
	if (!mysqli_query($conn, $sqlinsert)) {
		die('error inserting new record');
	}
	
	header('Location: /test/FinalForm.html'); // redirect back to the main site
?>   