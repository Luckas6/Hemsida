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
    <title>Commenting System</title>
    <link rel="stylesheet" href="chatt.css">
</head>
<body>
<style>
    @-webkit-keyframes glow {
    from {
      text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
    }
    to {
      text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
    }
  }
  
    </style>
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
    <div class="text-box">
              <h1 class="glow">
                  Charlie är dvärg </h1>
             
          </div>

<!-- Comment Form -->
<div>
<div  class="låda">
<form id="comment-form">
    <label class="ttext" for="username">Username:</label>
    <input  type="text" id="username" name="username" required>
    
    <label class="ttext" for="comment-text">Comment:</label>
    <input class="ucbox"id="comment-text" name="comment_text" required></input>
    
    <button type="submit">Post Comment</button>
</form>
<div>

</div>
<!-- Comments Section -->
<div class="comment"id="comments-section"></div>

<!-- JavaScript to Fetch and Display Comments -->
<script>
    // Funktion för att hämta och visa kommentarer
function loadComments() {

    // Skapa en ny begäran (request) för att hämta data från servern
    var xhr = new XMLHttpRequest();
    
      // Ange vad som ska hända när servern svarar
    xhr.onreadystatechange = function() {
         // Kolla om begäran har slutförts och om svarskoden är 200 (OK)
        if (xhr.readyState == 4 && xhr.status == 200) {
             // Konvertera den mottagna JSON-datamängden till kommentarer
            var comments = JSON.parse(xhr.responseText);

              // Hämta referensen till HTML-elementet där kommentarerna ska visas
            var commentsSection = document.getElementById('comments-section');
            
           // Rensa bort befintliga kommentarer
            commentsSection.innerHTML = '';
            
             // Lägg till varje kommentar i HTML-elementet
            comments.forEach(function(comment) {
                commentsSection.innerHTML += '<p><strong>' + comment.username + ':</strong> ' + comment.comment_text + '</p>';
            });
        }
    };
    // Öppna en GET-begäran för att hämta kommentarer från en specifik fil på servern
    xhr.open('GET', 'get_comments.php', true);

    // Skicka begäran till servern
    xhr.send();
}


// Funktion för att lägga till en ny kommentar
function addComment(event) {
     // Förhindra att formuläret skickas som vanligt
    event.preventDefault();
    
      // Hämta användarnamn och kommentartext från formuläret
    var username = document.getElementById('username').value;
    var commentText = document.getElementById('comment-text').value;

    // Skapa en ny begäran för att skicka data till servern
    var xhr = new XMLHttpRequest();

      // Ange vad som ska hända när servern svarar på den nya kommentaren
    xhr.onreadystatechange = function() {

         // Kolla om begäran har slutförts och om svarskoden är 200 (OK)
        if (xhr.readyState == 4 && xhr.status == 200) {
     // Visa ett meddelande om att kommentaren har lagts till (kan anpassas)
            alert(xhr.responseText);

             // Rensa formulärets fält efter att kommentaren har lagts till
            document.getElementById('username').value = '';
            document.getElementById('comment-text').value = '';

            // Uppdatera kommentarerna på sidan efter att en ny kommentar har lagts till
            loadComments();
        }
    };

     // Öppna en POST-begäran för att skicka data till en specifik fil på servern
    xhr.open('POST', 'add_comment.php', true);

     // Ange header för att meddela servern att det skickas formulärdata
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  
    // Skicka användarnamn och kommentartext till servern
    xhr.send('username=' + encodeURIComponent(username) + '&comment_text=' + encodeURIComponent(commentText));
}

// Ladda kommentarer när sidan laddas
loadComments();

// Sätt upp formuläret för att skicka nya kommentarer när det skickas
document.getElementById('comment-form').addEventListener('submit', addComment);
</script>

</body>
</html>