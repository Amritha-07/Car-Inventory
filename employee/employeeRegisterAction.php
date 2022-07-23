<?php
	require("config.php");
	$conn = new mysqli($svr, $usr, $pwd, $db);
	session_start();
	extract($_POST);
	$sql1 = "INSERT INTO employee_details (e_id, e_name, e_PhNo, e_age, e_pincode, e_doorNo, e_areaName, e_city, e_state, e_salary, e_username, e_password, e_email, e_dept) VALUES ('$e_id', '$e_name', '$e_phNo', '$e_age', '$e_pincode', '$e_doorNo', '$e_areaName', '$e_city', '$e_state', '$e_salary', '$e_username', '$e_password', '$e_email', '$e_dept')";
	if($conn->query($sql1)) {
		header("Location: http://localhost/CarInventory/employee/success.php");
	}
	else {
		$_SESSION["error"]="<h4 font-family='Haettenschweiler'>TRY AGAIN!</h4>";
		header("Location: http://localhost/CarInventory/employee/employeeRegister.php");	
		exit();
	}
	$conn->close(); 
?>