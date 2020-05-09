<?php	
	require "PDObject.php";
	$status = "";
		
		if($_SERVER['REQUEST_METHOD'] == "POST") {
    		insertTask($newID, $newMessage, $newCompleted, $newCreated, $newDue);
    		
			$newMessage = $_POST['Message'];
			$newCompleted = $_POST['Completed'];
			$newDue = $_POST['Due'];
			
		} else {
			$insertStatement = "INSERT INTO todos(createddate, duedate, message, isdone) 
			VALUES (CURRENT_TIMESTAMP, :Message, :Completed, :Due)";
			
			$stmt = $pdo->prepare($insertStatement);
			$stmt->execute(['Message' => $newMessage, 'Completed' =>$newCompleted, 'Due' => $newDue]);
			
			$status = "Your data was sent.";
			$newMessage = "";
			$newCompleted = "";
			$newDue = "";
			
		}	
		
	
		if ($insertStatement->execute()) {
		  echo "New record created successfully!";
		  } else {
		  echo "Unable to create record.";
		  }

		header("refresh:2; url=homework_table.php");


?>
