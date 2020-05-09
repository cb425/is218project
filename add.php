	
<?php	
	require PDObject.php;
	function insertTask($task, $title, $isdone, $createdate, $duedate) {

		$servername = "sql2.njit.edu";// you need to put your assigned server name
		$username = "cb425";// your ucid
		$password = "Megurine123/";// database password
		$dbname = "cb425"; // your ucid is your database name

		try {
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			echo "Connected successfully";
			echo "<br>";

		$insertStatement = $my_Db_Connection->prepare("
			INSERT INTO Students (name, lastname, email) 
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
	}
?>
	
