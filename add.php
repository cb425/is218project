<?php
if (!empty($_POST["add_record"])) {
    require "PDObject.php";
    $sql = "INSERT INTO todos (title, message,duedate, createddate, isdone) VALUES (:title, :message, :duedate, :createddate, :isdone)";
    $pdo_statement = $conn->prepare($sql);

    $result = $pdo_statement->execute(array(':title' => $_POST['title'], ':message' => $_POST['message'], ':duedate' => $_POST['duedate'], ':createddate' => date("Y-m-d h:i:s"), ':isdone' => $_POST['isdone']));
    if (!empty($result)) {
        header('location:homework_table.php');
    }
}
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Add a task!</title>
    <link href="main.css" rel="stylesheet" type="text/css">
    <script src="form.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-pink">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <div class="dropdown">
                    <a class="btn btn-colors" href="signout.html" role="button" aria-haspopup="true" aria-expanded="false">
                        Sign out
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>



<center>


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
    <a href="homework_table.php" class="addbutton">Back to List</a>
</center>

<div class="color-form">
    <div id="form" class="form-all">
        <h1 class="title">Add task</h1>
        <form class="form" action="" method="POST" name="addTask" onSubmit="return validateDescription()">
            <label>Title: </label><br>
            <input type="text" name="title" id="title" required/>
            <br>
            <br>
            <label>Description: </label><br>
            <textarea name="message" id="message" rows="5" required></textarea>
            <br>
            <br>
            <label for="duedate"> Due Date: </label>
            <br>
            <input type=datetime-local name="duedate" id="duedate" required/>
            <br> <br>
            <label for="isdone"> Completed? </label><br>
            <div style="float:left;">
            <input type="checkbox" id="isdone" name="isdone" class="check"/>
            </div>
            <br><br>
            <input class="addbutton" name="add_record" type="submit" value="Add"">
            <br><br>
        </form>
    </div>
</div>

<center>
    <br>
    <div class="footer">
        <p>Copyright 2020 Haydy Abdalla, Ross Bonifacio, Reesha Gandhi, Stuti Vyas</p>
    </div>

</center>

</body>
</html>
