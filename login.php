<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>login.html</title>
    <link href="main.css" rel="stylesheet" type="text/css">
    <script src="form.js"> </script>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>

<div id="slides" class="carousel" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://pbs.twimg.com/media/DS9R26FW4AECxFD.jpg" alt="rose"/>
            <div class="carousel-caption">
                <h1 class="display-2">homework tracker</h1>
            </div>
        </div>
    </div>
</div>

<!-- to change the main top picture, change the link in img src tag above -->
<!-- to change the link when clicking submit, change the formaction="this link" in button tag -->


<div class="color-form">
    <div id="form" class="form-all">
        <p class="subscribe"> login </p>
        <form class="form" name="form" onsubmit="return validateForm()" onSubmit="returm validateEmail()">
            <p class="form-text">
                Username (email): <br>
                <input type="text" name="username"><br>
                <br>
                Password: <br>
                <input type="text" name="password"> <br>
                <br> <br>

                <button class="submit" type="submit" value="login" formaction="placeholder.html">Login</button>
                <button class="signup" type="submit" value="SignUp" formaction="signup.html">Sign Up!</button>
            </p>
        </form>
    </div>
</div>


</body>
</html>