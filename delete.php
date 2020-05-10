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
}

else {
    exit('No ID specified!');
}

?>