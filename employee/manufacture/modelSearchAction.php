<html>
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
extract($_POST);
$sql = "SELECT * FROM model_specifications WHERE m_name = '$m_name'";
$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
foreach ($rows as $row) {
    echo "<div><table><tr><td>Model Name: </td><td>" . $row["m_name"] . "</td></tr><td>Model Variant: </td><td>" . $row["m_variant"] . "</td></tr><td>Fuel Type: </td><td>" . $row["m_fuel_type"] . "</td></tr><td>CC: </td><td>" . $row["m_cc"] . "</td></tr><td>Torque: </td><td>" . $row["m_torque"] . "</td></tr><td>Power: </td><td>" . $row["m_power"] . "</td></tr><td>Release Date: </td><td>" . $row["m_release_date"] . "</td></tr></table>";
}
?>
