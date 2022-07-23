<html>
<head>
    <title>Employee Register</title>
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
    <form action ="employeeRegisterAction.php" method="POST">
        <table>
            <tr>
                <td>EMPLOYEE ID: </td>
                <td><input type="text" name="e_id" pattern="[a-zA-Z0-9]+" required></td>
            </tr>
            <tr>
                <td>USER NAME: </td>
                <td><input type="text" name="e_username" pattern="[a-zA-Z0-9 ]+" required></td>
            </tr>
            <tr>
                <td>NAME: </td>
                <td><input type="text" name="e_name" pattern="[a-zA-Z ]+" required></td>
            </tr>
            <tr>
                <td>DEPARTMENT: </td>
                <td><input type="radio" id="sales" name="e_dept" value="Sales">
                    <label for="html">SALES</label><br>
                    <input type="radio" id="manufacture" name="e_dept" value="Manufacture">
                    <label for="css">MANUFACTOR</label><br>
                </td>
            </tr>
            <tr>
                <td>EMAIL ID: </td>
                <td><input type="text" name="e_email" pattern="^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$" required></td>
            </tr>
            <tr>
                <td>PHONE NUMBER: </td>
                <td><input type="int" name="e_phNo" pattern="[0-9]+" required></td>
            </tr>
            <tr>
                <td>AGE: </td>
                <td><input type="int" name="e_age" pattern="[0-9]+" required></td>
            </tr>
            <tr>
                <td>PINCODE: </td>
                <td><input type="int" name="e_pincode" pattern="[0-9]+" required></td>
            </tr>
            <tr>
                <td>DOOR NUMBER: </td>
                <td><input type="text" name="e_doorNo" required></td>
            </tr>
            <tr>
                <td>AREA: </td>
                <td><input type="text" name="e_areaName" pattern="[a-zA-Z ]+" required></td>
            </tr>
            <tr>
                <td>CITY: </td>
                <td><input type="text" name="e_city" pattern="[a-zA-Z ]+" required></td>
            </tr>
            <tr>
                <td>STATE: </td>
                <td><input type="text" name="e_state" pattern="[a-zA-Z ]+" required></td>
            </tr>
            <tr>
                <td>SALARY: </td>
                <td><input type="text" name="e_salary" pattern="[a-zA-Z0-9]+" required></td>
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