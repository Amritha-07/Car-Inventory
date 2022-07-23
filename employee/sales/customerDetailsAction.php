<?php
	require("..\config.php");
	$conn = new mysqli($svr, $usr, $pwd, $db);
	session_start();
	extract($_POST);
	$sql ="INSERT INTO customer_details (c_id,c_name,c_PhNo,c_age,c_pincode,c_doorNo,c_areaName,c_city,c_state) VALUES (NULL,'$c_name','$c_phNo','$c_age','$c_pincode','$c_doorNo','$c_areaName','$c_city','$c_state')";
	if($conn->query($sql)) {
		header("Location: http://localhost/CarInventory/employee/sales/success.php");
	}
	else {
		$_SESSION["error"]="<h4 font-family='Haettenschweiler'>TRY AGAIN!</h4>";
		header("Location: http://localhost/CarInventory/employee/sales/customerDetails.php");	
		exit();
	}
	$conn->close(); 
?>