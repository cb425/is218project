<?php	
	require "PDObject.php";


function add_task($Message, $DueDate, $ID) {
    global $db;
    $query = 'INSERT INTO todos
                 (message, duedate, id)
              VALUES
                 (:message, :duedate, :userid )';
    $statement = $db->prepare($query);
    $statement->bindValue(':message', $Message);
    $statement->bindValue(':duedate', $DueDate);
    $statement->execute();
    $statement->closeCursor();
}


?>
