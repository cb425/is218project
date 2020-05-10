<?php
if (!empty($_POST["add_record"])) {
    require "PDObject.php";
    $sql = "INSERT INTO accounts (email, fname, lname, phone, gender, password, college, major) VALUES (:email, :fname, :lname, :phone, :gender, :password, :college, :major)";
    $pdo_statement = $conn->prepare($sql);

    $result = $pdo_statement->execute(array(':email' => $_POST['email'], ':fname' => $_POST['fname'], ':lname' => $_POST['lname'], ':phone' => $_POST['phone'], ':gender' => $_POST['gender'], ':password' => $_POST['password'], ':college' => $_POST['college'], ':major' => $_POST['major']));
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>

<div id="slides" class="carousel" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://pbs.twimg.com/media/DS9R26FW4AECxFD.jpg" alt="img"/>
            <div class="carousel-caption">
                <h1 class="display-2">homework tracker</h1>
            </div>
        </div>
    </div>
</div>

<p></p>
<p></p>

<center>
<div class="task form">
        <p class="subscribe"> sign up! </p>
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
                <br><br>
                <label>Phone: </label><br>
               <input type="number" name="phone" id="phone" required/>
                <br>
                <br>
                <label>Gender: </label><br>
                <input type="text" name="gender" id="gender" required/>
                <br>
                <br>
                <label>Password: </label><br>
                <input type=password name="password" id="password" required/>
                <br>
                <br>
                <label>College: </label><br>
                <input type=text name="college" id="college" required/>
                <br>
                <br>
                <label>Major: </label><br>
                <input type=text name="major" id="major" required/>
                <br>
                <br>
            </p>

            <div class="demo-form-row">
                <input name="add_record" type="submit" class="addbutton" value="Sign up"">
            </div>
        </form>
</div>
    </div>
</center>
</body>
</html>
