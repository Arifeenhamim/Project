<?php
session_start();
if(empty($_SESSION["username"]) && empty($_SESSION["password"]))
{
    header("location: ../view/employelogin.php");
}

@include("../view/header.php");
@include("../view/emp_navbar.php");
@include("../view/employeeinsidebar.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/adminhome.css">
    <title> Manager HomePage</title>
</head>

<body>
    <div class="flex-container">
        <div class="flex-item">
            <h1 id="customer">Welcome To The HomePage<?php include('../control/cookie.php'); ?></h1>
            <p id="customer">
                
            </p>
            <h3>Do you want to <a href="../control/employelogout.php">Logout</a></h3>
        </div>
    </div>
</body>

</html>