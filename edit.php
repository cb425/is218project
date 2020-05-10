<?php
require_once("db.php");
if(!empty($_POST["save_record"])) {
    $pdo_statement=$pdo_conn->prepare("update posts set post_title='" . $_POST[ 'post_title' ] . "', description='" . $_POST[ 'description' ]. "', post_at='" . $_POST[ 'post_at' ]. "' where id=" . $_GET["id"]);
    $result = $pdo_statement->execute();
    if($result) {
        header('location:index.php');
    }
}
$pdo_statement = $pdo_conn->prepare("SELECT * FROM posts where id=" . $_GET["id"]);
$pdo_statement->execute();
$result = $pdo_statement->fetchAll();
?>

<html>
<head>
    <title>Edit task</title>
</head>
<body>
<div style="margin:20px 0px;text-align:right;"><a href="homework_table.php" class="button_link">Back to List</a></div>

<h1>Add task</h1>
<form action="" method="POST">


        <label>Description: </label><br>
        <textarea name="message" class="demo-form-field" rows="5" required ></textarea>
    </div>

    <label for="duedate"> Due Date: </label>
    <input type=datetime-local name="duedate" id="duedate" required/> <br><br>

    <div class="demo-form-row">
        <input name="add_record" type="submit" value="Add" class="demo-form-submit">

</form>
</div>
</body></html>
