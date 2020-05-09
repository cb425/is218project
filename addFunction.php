<?php	
	require "PDObject.php";


function add_task($Task, $DueDate, $UserID) {
    global $db;
    $query = 'INSERT INTO to_do_items
                 (Task, DueDate, UserID)
              VALUES
                 (:task, :duedate, :userid )';
    $statement = $db->prepare($query);
    $statement->bindValue(':task', $Task);
    $statement->bindValue(':duedate', $DueDate);
    $statement->bindValue(':userid', $UserID);
    $statement->execute();
    $statement->closeCursor();
}


?>
