<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>add.php</title>
<link href="main.css" rel="stylesheet" type="text/css">
<script src="form.js"> </script>
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
	
<?php
	include_once 'addFunction.php';
?>
	
		<form action="homework_table.php" method="post">
		  <div class="container">
			
			  <label for="task"> Task: </label>
			  <input type=text name="task" placeholder="Enter a description:" id="message" required> <br><br>
			
			  <label for="duedate"> Due Date: </label>
				<input type=datetime-local name="duedate" id="duedate" required/> <br><br>
			
			  <button type="submit">Add to List!</button>
		  </div>
		</form>
	
</body>
</html>	
