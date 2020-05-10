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
    echo "<center>Deleted!</center>";



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
<center>
<contains>
    <br><a href=\"homework_table.php\">Back to Task List</a>
</contains>
</center>

</body>
</html>
