<?php


if (isset($_GET['id'])) {
    if(!empty($_POST["save"])) {
        require_once "PDObject.php";


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


require "PDObject.php";
$query = "SELECT * FROM todos WHERE id=".$_GET['id'];
$statement = $conn ->prepare($query);
$statement->execute();
$theData = $statement->fetch(PDO::FETCH_ASSOC);

?>
<html>
<head>
    <title>Edit Task
    </title>
    <script src="form.js"> </script>
</head>
<body>
<div style="margin:20px 0px;text-align:right;"><a href="homework_table.php" class="button_link">Back to Task List</a></div>

<h1>Edit Task</h1>
<form action="" method="POST" name="addTask" onSubmit="return validateDescription()">
    <label>Title: </label><br>
    <input  type="text" name="title" id="title" value="<?php echo $theData['title'];?>" required/>
    <br>
    <br>
    <label>Description: </label><br>
    <input  type="text" name="message" id="message" rows="5" value="<?php echo $theData['message']?>" required/>

    <br>
    <br>
    <label for="duedate"> Due Date: </label>
    <br>
    <input type=datetime-local name="duedate" id="duedate" value="<?=date('Y-m-d\TH:i', strtotime($theData['duedate']))?>" required/> <br><br>

    <div class="demo-form-row">
        <input name="save" type="submit" value="Confirm changes"">

</form>
</div>
</body></html>