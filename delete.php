
<?php
require "PDObject.php";
try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $un, $pw);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if($operation == "delete"){
        $query = "DELETE FROM todos WHERE taskId = $taskId";
        $statement = $conn->prepare($query);
        $statement->execute();
        $statement->closeCursor();
    }
}

?>