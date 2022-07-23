<html>
<head>
	<link rel="stylesheet" href="../css/models.css">
	<title>CAR INVENTORY</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
	$result = mysqli_query($conn, "SELECT * FROM model_specifications");
	$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
	echo "<div class = 'display'>";
	foreach($rows as $row) {
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
			        echo "<div class = 'carDisplay'><div class = 'image'>" . $image . "</div><br><div class = 'model'  onclick='selectModel(this)'>" . $row["m_name"] . "</div></div>";
			    }
			}
		}
	}
	echo "</div>";
?>
<form method="POST" action="model.php">
<input type='hidden' name='selectedModel' id='selectedModel' value='' />
<input type='submit' style='display: none;' id='submitButton'/>
</form>
<script>
var selectModel = function(e) {
	var selectedModel = $(e).text();
	$('#selectedModel').val(selectedModel);
	//$('#selectedTest').submit();
	$("#submitButton").click();
};
</script>
</body>
</html>