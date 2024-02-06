<?php
session_start();
    include("connection.php");
    include("functions.php");

    $user_Data = check_login($con);
?>

<!DOCTYPE html>
<html> 
    <head>
      <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title> nyhemsida</title>
        <link rel="stylesheet" href="Index.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Merriweather:ital@0;1&family=Sigmar&family=Vina+Sans&family=Work+Sans:wght@400;500;800&display=swap" rel="stylesheet">
<link rel="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    </head>
      <body>
       

        <section class="header">
        <div > 
          <nav>
              <a  href="https://orteil.dashnet.org/cookieclicker/"><img class="freddy" src="Images/tonk.gif"> </a>

              

              
            <div class="nav-links" id="navLinks">
              <i class="fa fa-times" onclick="hideMenu()"></i> 
              <ul>
                  <li><a href="">Hem</a></li>
                  <li><a href="login2.php">Login</a></li>
                  <li><a href="loggaut.php">Logout</a></li>
                  <li><a href="chatt.php">Chatt</a></li>
                  <li><a href="stats.php">Stats</a></li>
                  <li><a href="">Blogg</a></li>
                  <li><a href="about.php">Om oss</a></li>
                  <li><a href="">Konto</a></li>
              </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
          </nav>
          <div class="text-box">
              <h1>
                  Charlie är dvärg

              </h1>
              <p> Charlie är kort bla bla bla</p>
              <a href="about.php" class="hero-btn">Klicka för mer info</a>
          </div>
      </nav>
        </section>

        <!----- menu-grejor -->
        <section class="grejor">
          <a class="wilmer" href="Images/NotAVirus.torrent" download="Virus.Torrent">
          <h1 class="wilmer">grejor</h1>
          <p>text bla bla bla</p>
        </a>
          
          

          <div class="row">
            <div class="grejor-col" >
            <h3 >Kacper </h3>
              <p ></p>
              <a href="https://www.facebook.com/profile.php?id=100083292743901" class="kacper"><img src="Images/kacper.jpg" class="bildwilmer"></a>
              <p>Jeszcze Polska nie zginęła,Kiedy my żyjemy. Co nam obca przemoc wzięła, Szablą odbierzemy. </p>
              <p>Marsz, marsz, Dąbrowski, Z ziemi włoskiej do Polski. Za twoim przewodem Złączym się z narodem.  </p>
              <p>Przejdziem Wisłę, przejdziem Wartę, Będziem Polakami. Dał nam przykład Bonaparte, Jak zwyciężać mamy. </p>
              <p>Marsz, marsz, Dąbrowski, Z ziemi włoskiej do Polski. Za twoim przewodem Złączym się z narodem.  </p>
              <p>Jak Czarniecki do Poznania Po szwedzkim zaborze, Dla ojczyzny ratowania Wrócim się przez morze.</p>
              <p>Marsz, marsz, Dąbrowski, Z ziemi włoskiej do Polski. Za twoim przewodem Złączym się z narodem.  </p>
              <p>Już tam ojciec do swej Basi Mówi zapłakany –Słuchaj jeno, pono nasi Biją w tarabany.  </p>
              <p>Marsz, marsz, Dąbrowski, Z ziemi włoskiej do Polski. Za twoim przewodem Złączym się z narodem.  </p>
             
            </div>
          <div class="grejor-col">
            <h3>Wilmer</h3>
            <p>"Om jag bänkar mer än dig så är jag rätt"</p>
            
            <a href="https://www.youtube.com/@ampotrosawrus3106" > <img src="Images/wilmerdöd.jpg" class="bildwilmer"></a>
            <p> Wilmer har ännu inte vid detta läget bänkat 100kg, han sitter fast på 92,5kg, haha vad svag han är</p>
            <p>Wilmer vill ta steroider</p>
       
          </div>
            <div class="grejor-col">
            <h3>Charlie</h3>
              
              <a href="https://discord.gg/ZEP65m2KnY"><img src="Images/barncharlie.png" class="bildwilmer"> </a>
              <p> Ingen lore, han är bara lång</p>
            
            </div>
            </div>

        </section>

<!-------Javascript menuöppnastänggrejs------->
      <script>

        var navLinks = document.getElementById(navLinks);

        function showMenu(){
          navLinks.style.right = "0";
        }
        function hideMenu(){
          navLinks.style.right = "-200px";
        }

      </script>
     </body>
</html>
