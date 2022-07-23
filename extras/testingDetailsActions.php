<?php
	require("../config.php");
	$conn = new mysqli($svr, $usr, $pwd, $db);
	session_start();
	extract($_POST);
	$sql = "INSERT INTO testing_details(t_id,performance_test,NVH_test,mileage_test,dyno_test,safety_test,quality_test,final_test,chassis_number) VALUES ('$t_id','$performance_test','$nvh_test','$mileage_test','$dyno_test','$safety_test','$quality_test','$final_test','$chassis_number')";
	if($conn->query($sql)) {
		header("Location: http://localhost/CarInventory/employee/manufacture/success.php");
	}
	else {
		$_SESSION["error"]="<h4 font-family='Haettenschweiler'>TRY AGAIN!</h4>";
		header("Location: http://localhost/CarInventory/employee/manufacture/testingDetails.php");	
		exit();
	}
	$conn->close();
?>