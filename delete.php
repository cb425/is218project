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
    echo "Deleted!";

    echo "<br><a href=\"homework_table.php\">Back to Task List</a>";
}

else {
    exit('No ID specified!');
}

?>