<?php

if (isset($_GET['id'])) {
    if(!empty($_POST["save"])) {
        require "PDObject.php";
        $sql = "UPDATE todos SET title =:title, message = :message, duedate= :duedate  WHERE id=". $_GET['id'];
        $pdo_statement = $conn->prepare( $sql );

        $result = $pdo_statement->execute( array( ':title'=>$_POST['title'], ':message'=>$_POST['message'],':duedate'=>$_POST['duedate']) );
    if (!empty($result) ){
        header('location:homework_table.php');
    }
    }
}

else {
    exit('No ID specified!');
}

?>
<html>
<head>
    <title>Add task</title>
    <script src="form.js"> </script>
</head>
<body>
<div style="margin:20px 0px;text-align:right;"><a href="homework_table.php" class="button_link">Back to List</a></div>

<h1>Add task</h1>
<form action="" method="POST" name="addTask" onSubmit="return validateDescription()">
    <label>Title: </label><br>
    <input  type="text" name="title" id="title" required/>
    <br>
    <br>
    <label>Description: </label><br>
    <textarea name="message" id="message" rows="5" required></textarea>

    <br>
    <br>
    <label for="duedate"> Due Date: </label>
    <br>
    <input type=datetime-local name="duedate" id="duedate" required/> <br><br>

    <div class="demo-form-row">
        <input name="save" type="submit" value="Add"">

</form>
</div>
</body></html>