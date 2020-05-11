<?php
if (!empty($_POST["add_record"])) {
    require "PDObject.php";
    $sql = "INSERT INTO accounts (email, fname, lname, password) VALUES (:email, :fname, :lname, :password)";
    $pdo_statement = $conn->prepare($sql);

    $result = $pdo_statement->execute(array(':email' => $_POST['email'], ':fname' => $_POST['fname'], ':lname' => $_POST['lname'], ':password' => $_POST['password']));
    if (!empty($result)) {
        header('location:homework_table.php');
    }
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sign up</title>
    <link href="main.css" rel="stylesheet" type="text/css">
    <script src="form.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">


</head>
<body>


<center>
    <div class="header">
        <h1>homework tracker</h1>
    </div>
    <div class="task form">
        <h1> sign up! </h1>
        <form class="form" action="" method="POST" name="signup" onsubmit="return validateForm()">
            <p class="form-text" class="subscribe">
                <label>Email: </label><br>
                <input type=email name="email" id="email" required/>
                <br><br>
                <label>First Name: </label><br>
                <input type=text name="fname" id="fname" required/>
                <br><br>
                <label> Last Name: </label>
                <br>
                <input type=text name="lname" id="lname" required/>
                <br>
                <br>
                <label>Password: </label><br>
                <input type=password name="password" id="password" required/>
                <br>
                <br>

            </p>

            <div class="demo-form-row">
                <input name="add_record" type="submit" class="addbutton" value="Login"">
                <br>
                <br>
                <center><button type="reset" class="addbutton" value="Cancel">Cancel</button></center>
                <br>
                <br>
                <input type="button" formaction="signup.php" class="addbutton" value="Sign up"></input>


            </div>
        </form>
    </div>
    </div>
    <div class="footer">
        <p>Copyright 2020 Haydy Abdalla, Ross Bonifacio, Reesha Gandhi, Stuti Vyas</p>
    </div>
</center>
</body>
</html>
