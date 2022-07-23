<?php
require('../config.php');
session_start();
if(!isset($_SESSION['e_id'])) {
	header("Location: ../employeeLogin.php");
}
?>
<!DOCTYPE html>
	<head>
		<title>Manufacture</title>
		<link rel="stylesheet" type="text/css" href="../../css/title.css" />
		<link rel="stylesheet" type="text/css" href="../../css/display.css" />
		<script defer src='https://use.fontawesome.com/releases/v5.0.6/js/all.js'></script>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@500&display=swap" rel="stylesheet">
	</head>
	<body>
		<div id="topBar"></div id>
		<div id="container">
			<div id="subContainer">
				<img src="../../images/logo.png"/>
				<ul>
					<li><a href="index.php"><div class="topMenuItem">HOME</div></a></li>
					<li><a href="modelSpecifications.php"><div class="topMenuItem">ADD MODEL</div></a></li>
					<li><a href="modelSearch.php"><div class="topMenuItem">SEARCH MODEL</div></a></li>
					<li><a href="carDetails.php"><div class="topMenuItem">ADD CAR</div></a></li>
					<li><a href="carSearch.php"><div class="topMenuItem">SEARCH CAR</div></a></li>
					<li><a href="testingDetails.php"><div class="topMenuItem">TEST CAR</div></a></li>
				</ul>
			</div>
		</div>
	</body>
</html>
<?php
require('../config.php');
$conn = new mysqli($svr, $usr, $pwd, $db);
$e_id = $_SESSION['e_id'];
extract($_POST);
$sql = "SELECT * FROM employee_details WHERE e_id = '$e_id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
echo "<div><table><tr><td>Name: </td><td>" . $row['e_name']
	. "</td></tr><tr><td>User Name: </td><td>" . $row['e_userName'] 
	. "</td></tr><tr><td>Email: </td><td>" . $row['e_email']
	. "</td></tr><tr><td>Department: </td><td>" . $row['e_dept']
	. "</td></tr><tr><td>Phone Number: </td><td>" . $row['e_PhNo'] 
	. "</td></tr><tr><td>Age: </td><td>" . $row['e_age'] 
	. "</td></tr><tr><td>Address: </td><td>" . $row['e_doorNo'] . " " . $row['e_areaname'] 
	. "</td></tr><tr><td>Pincode: </td><td>" . $row['e_pincode'] 
	. "</td></tr><tr><td>City: </td><td>" . $row['e_city'] 
	. "</td></tr><tr><td>State: </td><td>" . $row['e_state'] 
	. "</td></tr></div>";
?>