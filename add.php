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
    <title>index.html</title>
    <link href="main.css" rel="stylesheet" type="text/css">
    <script src="form.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
<div style="margin:20px 0px;text-align:right;"><a href="homework_table.php" class="button_link">Back to List</a></div>

<div class="carousel" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="carousel-img.jpg" alt="img"/>
            <div class="carousel-caption">
                <h1 class="display-2">homework tracker</h1>
            </div>
        </div>
    </div>
</div>

<div class="color-form">
    <div id="form" class="form-all">
        <h1 class="addatask">Add task</h1>
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
            <label for="isdone"> Completed? </label>
            <input type="checkbox" id="isdone" name="isdone"/>
            <br><br>
            <input name="add_record" type="submit" value="Add"">
        </form>
    </div>
</div>

</body>
</html>
