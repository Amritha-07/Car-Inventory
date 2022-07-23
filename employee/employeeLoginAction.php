<?php
require('..\config.php');
session_start();
$conn = new mysqli($svr, $usr, $pwd, $db);
extract($_POST);
$sql = "select * from employee_details where e_userName='$e_username' and e_password='$e_password'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
if(mysqli_num_rows($result)==1) {
	if($row['e_dept'] == 'Sales') {
		$_SESSION['e_id'] = $row["e_id"];
		header("location: sales/salesHome.php");
	}
	if($row['e_dept'] == 'Manufacture') {
		$_SESSION['e_id'] = $row["e_id"];
		header("location: manufacture/manufactureHome.php");
	}
} 
else {
	header("location: employeeLogin.php");
}
?>