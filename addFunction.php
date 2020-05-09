<?php	
	require "PDObject.php"
	
		if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['add'])) {
    		insertTask($newID, $newTitle, $newCompleted, $newCreated, $newDue);
    	}
		
		function insertTask($ID, $title, $isdone, $createdate, $duedate) {

		$insertStatement = $my_Db_Connection->prepare(
			"INSERT INTO todos (id, message, isdone, createdate, duedate) 
			VALUES (:atask, :atitle, :aisdone, :acreatedate, :aduedate)");

		$insertStatement->bindParam(':aID', $ID);
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

$newTask = $_GET["ID"];
$newTitle = $_GET["Title"];
$newCompleted = $_GET["Completed"];
$newCreated = $_GET["Created"];
$newDue = $_GET["Due"];


?>
