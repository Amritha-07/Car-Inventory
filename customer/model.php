<html>
<head>
	<link rel="stylesheet" href="../css/model.css">
	<title>CAR INVENTORY</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@700&display=swap" rel="stylesheet">
</head>
<body>
	<div id="topBar"></div id>
      <div id="subContainer">
        <img src="..\images\logo.png"/>
        <ul>
          <li><a href="index.php"><div class="topMenuItem">HOME</div></a></li>
          <li><a href="models.php"><div class="topMenuItem">MODELS</div></a></li>
          <li><a href="aboutUs.php"><div class="topMenuItem">ABOUT US</div></a></li>
        </ul>
      </div>
<?php
	include "C:\wamp64\www\CarInventory\simplehtmldom_1_9_1\simple_html_dom.php";
	require("..\config.php");
	session_start();
	$conn = mysqli_connect($svr, $usr, $pwd, $db);
	$model = $_POST["selectedModel"];
	$result = mysqli_query($conn, "SELECT * FROM model_specifications WHERE m_name='$model'");
	$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
	echo "<table><tr><th>MODEL NAME</th><th>VARIANT</th><th>FUEL TYPE</th><th>CC</th><th>TORQUE</th><th>POWER</th><th>RELEASE DATE</th><th>CAR</th>";
	$search_query = $row["m_name"] . "car";
    $search_query = urlencode( $search_query );
    $html = file_get_html( "https://www.google.com/search?q=$search_query&tbm=isch" );  
    if(!empty($html)) {
	    $image_container = $html->find('img');
	    if(!empty($image_container)) {
		    $images = $image_container;
		    $image_count = 1; //Enter the amount of images to be shown
		    $i = -1;
		    foreach($images as $image){
		        if($i == $image_count) break;
		        $i++;
		        if($i == 0) continue;
		        echo "<tr><td>" . $row["m_name"] . "</td><td>" . $row["m_variant"] . "</td><td>" . $row["m_fuel_type"] . "</td><td>" . $row["m_cc"] . "</td><td>" . $row["m_torque"] . "</td><td>" . $row["m_power"] . "</td><td>" . $row["m_release_date"] . "</td><td>" . $image . "</td></tr></table>";
		    }
		}
	}
?>
</body>
</html>