<?php	
	require "PDObject.php";


function add_task($Message, $DueDate, $ID) {
    global $db;
    $query = 'INSERT INTO todos
                 (message, duedate)
              VALUES
                 (:message, :duedate)';
    $statement = $db->prepare($query);
    $statement->bindValue(':message', $Message);
    $statement->bindValue(':duedate', $DueDate);
    $statement->execute();
    $statement->closeCursor();
}


?>
