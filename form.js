<?php
if(!empty($_POST["add_record"])) {
    require "PDObject.php";
    $sql = "INSERT INTO todos (message,duedate, createddate) VALUES ( :message, :duedate, :createddate)";
    $pdo_statement = $conn->prepare( $sql );

    $result = $pdo_statement->execute( array( ':message'=>$_POST['message'],':duedate'=>$_POST['duedate'], ':createddate' =>date("Y-m-d h:i:s") ) );
    if (!empty($result) ){
        header('location:homework_table.php');
    }
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
<form action="" method="POST" name="addTask" onSubmit="returm validateDescription()">

        <label>Description: </label><br>
        <textarea name="message" class="demo-form-field" rows="5" required ></textarea>


        <label for="duedate"> Due Date: </label>
        <input type=datetime-local name="duedate" id="duedate" required/> <br><br>

        <div class="demo-form-row">
        <input name="add_record" type="submit" value="Add" class="demo-form-submit">

</form>
</div>
</body></html>
