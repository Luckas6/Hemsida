<?php
    session_start();
    include("connection.php");
    include("functions.php"); 
    
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //somthing was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
            //read from database
            $query = "SELECT * FROM Users WHERE user_name = '$user_name' limit 1";

            $result = mysqli_query($con, $query);
           
            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);
                    if($user_data['password'] === $password)
                    {
                        $_SESSION['user_id'] = $user_data['user_id'];
                        header("Location: index.php");
                        die;
                    }
                }
            }
            echo "Wrong username or password";
        }else
        {
            echo "Wrong username or password";
        }
    } 
     
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login2.css">
    <script src="https://kit.fontawesome.com/8a814f81de.js" crossorigin="anonymous"></script>
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
         <div class="input-group">
            <div class="login">Login</div>
            <div class="input-field">
            <i class="fa-solid fa-user-injured"></i>
            <a >Username</a>
            <input id="text" type="text" name="user_name"><br><br>
            </div>
            <div class="input-field">
            <i class="fa-solid fa-user-injured"></i>
            <a>Password</a>
            <input id="text" type="password" name="password"><br><br>
            </div>
            <div class="input-field">
            <i class="fa-solid fa-user-injured"></i>
            <a>Email</a>
            
            <input id="text" type="email" name="email"><br><br>
            </div>
        </div>
            <input id="button" type="submit" value="Login"><br><br>
            <a href="signup.php">Click to Signup</a><br><br>
        </form>

    </div>
    
</body>
</html>