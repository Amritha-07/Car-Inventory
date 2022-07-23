<html>
<head>
    <title>Employee Login</title>
    <link rel="stylesheet" type="text/css" href="../css/title.css" />
    <link rel="stylesheet" type="text/css" href="../css/form.css" />
    <script defer src='https://use.fontawesome.com/releases/v5.0.6/js/all.js'></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <div id="topBar"></div id>
    <div id="container">
        <div id="subContainer">
            <img src="../images/logo.png"/>
            <ul>
                <li><a href="index.php"><div class="topMenuItem">HOME</div></a></li>
                <li><a href="employeeRegister.php"><div class="topMenuItem">REGISTER</div></a></li>
                <li><a href="employeeLogin.php"><div class="topMenuItem">LOGIN</div></a></li>
            </ul>
        </div>
    </div>
    <form action ="employeeLoginAction.php" method="POST">
        <table>
            <tr>
                <td>USER NAME: </td>
                <td><input type="text" name="e_username" pattern="[a-zA-Z0-9]+" required></td>
            </tr>
            <tr>
                <td>PASSWORD: </td>
                <td><input type="text" name="e_password" required></td>
            </tr>
            <tr>
                <td><input type="submit"></td>
            </tr>
        </table>
    </form>
</body>