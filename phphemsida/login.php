
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In and Sign Up Form</title>
    <link rel="stylesheet" href="logincss.css">
    <script src="https://kit.fontawesome.com/8a814f81de.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="form-box">
        <h1 id="title">Sign Up</h1>
        <form>
            <div class="input-group">
                <div class="input-field" id="nameField">
                    <i class="fa-solid fa-user-injured"></i>
                    <input type="text" placeholder="Name">
                </div>

                <div class="input-field">
                    <i class="fa-solid fa-user-injured"></i>
                    <input type="email" placeholder="Email">
                </div>

                <div class="input-field">
                    <i class="fa-solid fa-user-injured"></i>
                    <input type="password" placeholder="Password">
                </div>
                <p>Lost password <a href="#">Click Here!</a></p>
            </div>
            <div class="btn-field">
                    <button type="button" id="signup">Sign Up</button>
                    <button type="button" id="signin"class="disable">Sign In</button>

            </div>
        </form>
    </div>
 
</div>

<script>

let signup = document.getElementById("signup")
let signin = document.getElementById("signin")
let nameField = document.getElementById("nameField")
let title = document.getElementById("title")

signin.onclick = function(){
    nameField.style.maxHeight = "0";
    title.innerHTML = "Sign In";
    signup.classList.add("disable");
    signin.classList.remove("disable");
}
signup.onclick = function(){
    nameField.style.maxHeight = "60px";
    title.innerHTML = "Sign Up";
    signin.classList.add("disable");
    signup.classList.remove("disable");
}

</script> 
</body>
</html>