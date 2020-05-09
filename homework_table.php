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

    $query = 'SELECT * FROM todos';
    $statement = $conn ->prepare($query);
    $statement->execute();
    $accounts = $statement->fetchAll();
    $statement->closeCursor();

    echo "Tasks: <br>";
    echo "<table width = 45%; border = 1px>
        <tr>
            <th>Task</th>
            <th>owneremail</th>
            <th>ownerid</th>
            <th>createddate</th>
            <th>duedate</th>
            <th>message</th>
            <th>isdone</th>           
        </tr>";

    foreach ($accounts as $result) {
        echo "<tr>
                    <td>".$result["id"]."</td>
                    <td>".$result["owneremail"]."</td>
                    <td>".$result["ownerid"]."</td>
                    <td>".$result["createddate"]."</td>
                    <td>".$result["duedate"]."</td>
                    <td>".$result["message"]."</td>
                    <td>".$result["isdone"]."</td>
               </tr>";
    }

    echo "<br><br>";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();

}
?>