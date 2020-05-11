<?php
require "PDObject.php";
global $conn;
$msg = '';



// Check that the contact ID exists
if (isset($_GET['id'])) {
    // Select the record that is going to be deleted
    $query = "DELETE FROM todos WHERE id =" . $_GET['id'];
    $statement = $conn->prepare($query);
    $statement->execute();
    $statement->closeCursor();


}

else {
    exit('No ID specified!');
}

?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>index.html</title>
    <link href="main.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
<div class="header">
    <h1>homework tracker</h1>
</div>

<!--signout button-->
<div class="info"><a href="signout.html">Sign Out</a></div>

<center>
<contains>
    <h1>Deleted assignment!</h1>
    <br><div class="addbutton"><a href="homework_table.php">Back to Task List</a></div>
</contains>
</center>

</body>
</html>
