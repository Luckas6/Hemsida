<?php
session_start();
    include("connection.php");
    include("functions.php");

    $user_Data = check_login($con);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STATS</title>
    <link rel="stylesheet" href="stats.css">
</head>
<body class="container">
    <div class="nav-links" id="navLinks">
    <ul>
                  <li><a href="index.php">Hem</a></li>
                  <li><a href="login2.php">Login</a></li>
                  <li><a href="loggaut.php">Logout</a></li>
                  <li><a href="chatt.php">Chatt</a></li>
                  <li><a href="stats.php">Stats</a></li>
                  <li><a href="">Blogg</a></li>
                  <li><a href="about.php">Om oss</a></li>
                  <li><a href="">Konto</a></li>
              </ul>

    </div>
<div id="box"  >
        <form id="låda" method="POST">
            <div class="stats">Stats</div>
            <a >Enter Username</a><br>
            <input id="text" type="text" name="user_name"><br><br>
            <a>Enter of hours played</a><br>
            <input id="text" type="text" name="timmar"><br><br>
            <a>Enter number of completed achivments</a><br>
            <input id="text" type="text" name="achiv"><br><br>

            <input id="button" type="submit" value="submit"><br><br>
           
        </form>
</div>
</body>
</html>