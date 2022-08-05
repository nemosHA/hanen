<?php
	$IntNum = $_POST['IntNum'];
	// Database connection
	$conn = new mysqli('localhost','root','','SmartMethods');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into SmartMethodsData(Number) values (?)");
		$stmt->bind_param("i", $IntNum);
		$execval = $stmt->execute();
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>
