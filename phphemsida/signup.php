<?php
session_start();
    include("connection.php");
    include("functions.php"); 
    
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //somthing was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name) && !empty($email))
        {
            //save to database
            $user_id = random_num(20);
            $query = "INSERT INTO users (user_id,user_name,password,email) VALUES ('$user_id','$user_name','$password','$email')";

            mysqli_query($con, $query);
            echo "wilemr";
            header("Location: login2.php");
            die;
        }else
        {
            echo "Please enter some valid information";
        }
    } 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="login2.css">
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
    <div   id="box">
        <form method="POST">
            <div class="login">Signup</div>
            <a >Enter Username</a>
            <input id="text" type="text" name="user_name"><br><br>
            <a>Enter Password</a>
            <input id="text" type="password" name="password"><br><br>
            <a>Enter Email</a>
            <input id="text" type="email" name="email"><br><br>

            <input id="button" type="submit" value="Login"><br><br>
            <a href="login2.php">Click to Login</a><br><br>
        </form>

    </div>
    
</body>
</html>