<?php
	require("../config.php");
	$conn = new mysqli($svr, $usr, $pwd, $db);
	session_start();
	extract($_POST);
	$sql ="INSERT INTO billing_Details (b_id,b_mode,b_status,c_id,e_id,chassis_number) VALUES ('$b_id','$b_mode','$b_status','$c_id','$e_id','$chassis_number')";
	if($conn->query($sql)) {
		header("Location: http://localhost/CarInventory/employee/sales/success.php");
	}
	else {
		$_SESSION["error"]="<h4 font-family='Haettenschweiler'>TRY AGAIN!</h4>";
		header("Location: http://localhost/CarInventory/employee/sales/billingDetails.php");	
		exit();
	}
	$conn->close(); 
?>