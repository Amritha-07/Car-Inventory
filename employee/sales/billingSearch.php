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
                <li><a href="customerDetails.php"><div class="topMenuItem">ADD CUSTOMER</div></a></li>
                <li><a href="customerSearch.php"><div class="topMenuItem">SEARCH CUSTOMER</div></a></li>
                <li><a href="billingDetails.php"><div class="topMenuItem">ADD BILL</div></a></li>
                <li><a href="billingSearch.php"><div class="topMenuItem">SEARCH BILL</div></a></li>
            </ul>
        </div>
    </div>
    <form action ="billingSearchAction.php" method="POST">
        <table class="">
            <tr>
                <td>BILLING ID: </td>
                <td><input type="text" name="b_id" pattern="[a-zA-Z0-9 ]+" required></td>
            </tr>
            <tr>
                <td><input type="submit"></td>
            </tr>
        </table>
    </form>
</body>
