<?php
	require("../config.php");
	$conn = new mysqli($svr, $usr, $pwd, $db);
	session_start();
	extract($_POST);
	$sql ="INSERT INTO car_Details (chassis_number,color,m_id) VALUES ('$chassis_number','$color','$m_id')";
	if($conn->query($sql)) {
		header("Location: http://localhost/CarInventory/employee/manufacture/success.php");
	}
	else {
		$_SESSION["error"]="<h4 font-family='Haettenschweiler'>TRY AGAIN!</h4>";
		header("Location: http://localhost/CarInventory/employee/manufacture/carDetails.php");	
		exit();
	}
	$conn->close();
?>