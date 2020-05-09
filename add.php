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
	
		<form class="form" name="form" method="POST">
		<p class="form-text">
			ID: <br>
			<input type="number" name="ID"><br>
			<br>
			Title: <br>
			<input type="text" name="Title"> <br>
			<br>
			Completed?<br>
			<input type="checkbox" name="Completed"> <br>
			<br>
			Created: <br>
			<input type="date" name="Created"> <br>
			<br>
			Due: <br>
			<input type="date" name="Due"><br>
			<br> <br>
		
		<button class="submit" onclick="location.href='addFunction.php'" type="submit" name="add">Add task</button>
		</p>
	</form>
	
	
</body>
</html>	
