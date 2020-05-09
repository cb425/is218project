<?php	
	require PDObject.php;
	function insertTask($task, $title, $isdone, $createdate, $duedate) {

		$insertStatement = $my_Db_Connection->prepare("
			INSERT INTO Students (task, title, isdone, createdate, duedate) 
			VALUES (:atask, :atitle, :aisdone, :acreatedate, :aduedate)");

		$insertStatement->bindParam(':atask', $task);
		$insertStatement->bindParam(':atitle', $title);
		$insertStatement->bindParam(':aisdone', $isdone);
		$insertStatement->bindParam(':acreatedate', $createdate);
		$insertStatement->bindParam(':aduedate', $duedate);


		if ($insertStatement->execute()) {
		  echo "New record created successfully!";
		  } else {
		  echo "Unable to create record.";
		  }
		}
$newTask = $_GET["Task"];
$newTitle = $_GET["Title"];
$newCompleted = $_GET["Completed"];
$newCreated = $_GET["Created"];
$newDue = $_GET["Due"];

insertTask($newTask, $newTitle, $newCompleted, $newCreated, $newDue);



?>
