<?php
require('../config.php');
session_start();
if(!isset($_SESSION['e_id'])) {
    header("Location: ../employeeLogin.php");
}
?>
<!DOCTYPE html>
<head>
    <title>Sales</title>
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
                <li><a href="customerDetails.php"><div class="topMenuItem">ADD CUSTOMER</div></a></li>
                <li><a href="customerSearch.php"><div class="topMenuItem">SEARCH CUSTOMER</div></a></li>
                <li><a href="billingDetails.php"><div class="topMenuItem">ADD BILL</div></a></li>
                <li><a href="billingSearch.php"><div class="topMenuItem">SEARCH BILL</div></a></li>
            </ul>
        </div>
    </div>
</body>
<?php
require('../config.php');
$conn = new mysqli($svr, $usr, $pwd, $db);
extract($_POST);
$sql = "SELECT * FROM customer_details WHERE c_name = '$c_name'";
$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
foreach ($rows as $row) {
    echo "<div><table><tr><td>Name: </td><td>" . $row['c_name']
    . "</td></tr><tr><td>Phone Number: </td><td>" . $row['c_PhNo'] 
    . "</td></tr><tr><td>Age: </td><td>" . $row['c_age'] 
    . "</td></tr><tr><td>Address: </td><td>" . $row['c_doorNo'] . " " . $row['c_areaName'] 
    . "</td></tr><tr><td>Pincode: </td><td>" . $row['c_pincode'] 
    . "</td></tr><tr><td>City: </td><td>" . $row['c_city'] 
    . "</td></tr><tr><td>State: </td><td>" . $row['c_state'] 
    . "</td></tr></div>";
}
?>