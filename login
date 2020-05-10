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
        <form class="form" action="" method="POST" name="LoginForm" onsubmit="return validateLogin()">
            <p class="form-text">
                <label> Username (email):</label> <br>
                <input type=text name="email"><br>
                <br>
                <label>Password: </label><br>
                <input type=password name="password"> <br>
                <br> <br>

                <button class="submit" type=submit value="login" formaction="homework_table.php">Login</button>
            </p>
        </form>
        <form style="padding:10px;" class="form" name="signupbutton">
            <button class="signup" type="submit" value="SignUp" formaction="signup.php">Sign Up!</button>
        </form>
    </div>
</div>
</body>
</html>