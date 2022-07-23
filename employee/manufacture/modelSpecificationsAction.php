<?php
	require("../config.php");
	$conn = new mysqli($svr, $usr, $pwd, $db);
	session_start();
	extract($_POST);
	$sql ="INSERT INTO model_specifications (m_id,m_name,m_variant,m_fuel_type,m_cc,m_torque,m_power,m_release_date) VALUES ('$m_id','$m_name','$m_variant','$m_fuel_type','$m_cc','$m_torque','$m_power','$m_release_date')";
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
