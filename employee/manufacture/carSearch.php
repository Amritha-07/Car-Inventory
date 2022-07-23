<html>
<head>
    <title>Manufacture</title>
    <link rel="stylesheet" type="text/css" href="../../css/title.css" />
    <link rel="stylesheet" type="text/css" href="../../css/form.css" />
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
    <form action ="carSearchAction.php" method="POST">
        <table class="">
            <tr>
                <td>CHASSIS NUMBER: </td>
                <td><input type="text" name="chassis_number" pattern="[a-zA-Z0-9 ]+" required></td>
            </tr>
            <tr>
                <td><input type="submit"></td>
            </tr>
        </table>
    </form>
</body>
