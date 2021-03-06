<?php


if (isset($_GET['id'])) {
    if (!empty($_POST["save"])) {
        require_once "PDObject.php";


        $sql = "UPDATE todos SET title =:title, message = :message, duedate= :duedate, isdone = :isdone  WHERE id=" . $_GET['id'];
        $pdo_statement = $conn->prepare($sql);

        $result = $pdo_statement->execute(array(':title' => $_POST['title'], ':message' => $_POST['message'], ':duedate' => $_POST['duedate'], ':isdone' => $_POST['isdone']));
        if (!empty($result)) {
            header('location:homework_table.php');
        }
    }

} else {
    exit('No ID specified!');
}


require "PDObject.php";
$query = "SELECT * FROM todos WHERE id=" . $_GET['id'];
$statement = $conn->prepare($query);
$statement->execute();
$theData = $statement->fetch(PDO::FETCH_ASSOC);

?>
<!doctype html>
<meta charset="UTF-8">
<title>Add a task!</title>
<link href="main.css" rel="stylesheet" type="text/css">
<script src="form.js"></script>
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
<!--sign out button-->
<div class="info"><a href="signout.html">Sign Out</a></div>


<center>


    <div class="header">
        <h1>homework tracker</h1>
    </div>
    <a href="homework_table.php" style="margin-top:10px;" class="addbutton">Back to List</a>


<div class="task">
    <h1 class="title">Edit Task</h1>
    <form class="form" action="" method="POST" name="addTask" onSubmit="return validateDescription()">
        <label>Title: </label><br>
        <input type="text" name="title" id="title" value="<?php echo $theData['title']; ?>" required/>
        <br>
        <br>
        <label>Description: </label><br>
        <input type="text" name="message" id="message" rows="5" value="<?php echo $theData['message'] ?>" required/>

        <br>
        <br>
        <label for="duedate"> Due Date: </label>
        <br>
        <input type=datetime-local name="duedate" id="duedate"
           value="<?= date('Y-m-d\TH:i', strtotime($theData['duedate'])) ?>" required/>
        <br>
        <br>
        <div style="float:left;">
        <?php
        if ($theData['isdone'] == NULL) {
            echo "<label for=\"isdone\"> Completed? </label><br>
            <input class=\"check\" type=\"checkbox\" id=\"isdone\" name=\"isdone\"/>";
        } else {
            echo "<label for=\"isdone\"> Completed? </label><br>
            <input class=\"check\" checked=\"checked\" type=\"checkbox\" id=\"isdone\" name=\"isdone\"/>";
        }
        ?></div>


    <br><br><br>

    <div class="demo-form-row">
        <input name="save" class="addbutton" type="submit" value="Confirm"">

</form>
    </div>

</center>
<center>
    <br><br>
    <div class="footer">
        <p>Copyright 2020 Haydy Abdalla, Ross Bonifacio, Reesha Gandhi, Stuti Vyas</p>
    </div>
</center>

</body>
</html>