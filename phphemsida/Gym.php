<?php
session_start();
    include("connection.php");
    include("functions.php");

    $user_Data = check_login($con);
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In and Sign Up Form</title>
    <link rel="stylesheet" href="gymcss.css">
   
</head>
<body>
<div class="container">
    <img class="norton" src="Images/416902669_affinitywebpageBlockedbyNorton.png">

</div>
<nav>
  <a class="btn inline-flex" href="Images/BarnCharlie.7z" download="CP">
    <img class="dbtn" src="Images/freddy fazbear.png" alt="Download CP">
  </a>
    
  <div class="nav-links" id="navLinks">
    <i class="fa fa-times" onclick="hideMenu()"></i>
    <ul>
        <li><a href="">Hem</a></li>
        <li><a href="login.html">Login</a></li>
        <li><a href="Chatt.html">Chatt</a></li>
        <li><a href="Gym.html">Gym</a></li>
        <li><a href="">grejor</a></li>
        <li><a href="">Blogg</a></li>
        <li><a href="">Om oss</a></li>
        <li><a href="">Konto</a></li>
    </ul>
  </div>

</body>
</html>