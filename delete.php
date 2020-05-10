<?php
require "PDObject.php";
global $conn;
$msg = '';



// Check that the contact ID exists
if (isset($_GET['id'])) {
    // Select the record that is going to be deleted
    $query = "DELETE FROM todos WHERE id =" . $_GET['id'];
    $statement = $conn->prepare($query);
    $statement->execute();
    $statement->closeCursor();
    echo "<center>Deleted!</center>";



}

else {
    exit('No ID specified!');
}

?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>index.html</title>
    <link href="main.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark bg-pink">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <div class="dropdown">
                    <a class="btn btn-colors" href="signout.html" role="button" aria-haspopup="true" aria-expanded="false">
                        Sign out
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<center>
<contains>
    <br><a href="homework_table.php">Back to Task List</a>
</contains>
</center>

</body>
</html>
