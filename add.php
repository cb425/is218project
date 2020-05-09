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
	
		<form class="form" name="form" method="post">
		<p class="form-text">
			Message:
			<input type="text" name="Message"> <br>
			<br>
			Completed?
			<input type="checkbox" name="Completed"> <br>
			<br>
			Due:
			<input type="date" name="Due"><br>
			<br> <br>
		
		<button class="submit" value="Insert" onclick="location.href='addFunction.php'" type="submit" name="add">Add task</button>
		</p>
	</form>
	
	
</body>
</html>	
