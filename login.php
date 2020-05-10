<?php
if(!empty($_POST["add_record"])) {
    require "PDObject.php";
    $sql = "INSERT INTO accounts (email, password, fname, lname) VALUES (:email, :password, :fname, :lname)";
    $pdo_statement = $conn->prepare( $sql );

    $result = $pdo_statement->execute( array(':email'=>$_POST['email'], ':password'=>$_POST['password'], ':fname'=>$_POST['fname'], ':lname'=>$_POST['lname']));
    if (!empty($result) ){
        header('location:homework_table.php');
    }
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>index.html</title>
    <link href="main.css" rel="stylesheet" type="text/css">
    <script src="form.js"> </script>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
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


<h1>Sign up!</h1>
<form action="" method="POST" name="signup" onsubmit="return validateForm()">
    <label>Email: </label><br>
    <input  type=email name="email" id="email" required/>
    <br>
    <br>
    <label>First Name: </label><br>
    <input type=text name="fname" id="fname" required />
    <br>
    <br>
    <label> Last Name: </label>
    <br>
    <br>
    <input type=text name="lname" id="lname" required/>
    <br>
    <br>
    <label>Password: </label><br>
    <input type=password name="password" id="password" required />

    <br>
    <br>

    <div class="demo-form-row">
        <input name="add_record" type="submit" value="Add"">

</form>
</div>
</body></html>
