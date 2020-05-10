<?php
	require "PDObject.php";


function add_task($Message, $DueDate, $ID) {
	global $conn;
    $query = 'INSERT INTO todos
                 (message, duedate)
              VALUES
                 (:message, :duedate)';
    $statement = $conn->prepare($query);
    $statement->bindValue(':message', $Message);
    $statement->bindValue(':duedate', $DueDate);
    $statement->execute();
    $statement->closeCursor();
}


?>
