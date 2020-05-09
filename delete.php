
<?php
$servername = "sql2.njit.edu";// you need to put your assigned server name
$username = "cb425";// your ucid
$password = "Megurine123/";// database password
$dbname = "cb425"; // your ucid is your database name

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    echo "<br>";

    $query = 'SELECT * FROM todos ORDER BY duedate';
    $statement = $conn->prepare($query);
    $statement->execute();
    $accounts = $statement->fetchAll();
    $statement->closeCursor();

    $id = $_REQUEST['id'];
    $query = "DELETE FROM todos WHERE id=$id";
    $result = mysqli_query($con, $query) or die (mysqli_error());
    header("Location: view.php");

}

catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();

}
?>