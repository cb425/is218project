<?php
require "PDObject.php";




try {

    $query = 'SELECT * FROM todos ORDER BY duedate';
    $statement = $conn ->prepare($query);
    $statement->execute();
    $accounts = $statement->fetchAll();
    $statement->closeCursor();


    echo "Tasks: <br>";
    echo "<table width = 45%; border = 1px>
        <tr>
            <th>Task</th>
            <th>Title</th>
            <th>isdone</th> 
            <th>createddate</th>
            <th>duedate</th>
            
        
        </tr>";

    foreach ($accounts as $result) {
        echo "<tr>
                    <td>".$result["id"]."</td>
                    <td>".$result["message"]."</td>
                    <td>".$result["isdone"]."</td>  
                    <td>".$result["createddate"]."</td>
                    <td>".$result["duedate"]."</td>
                    <td><a href='edit.php'> Edit</a></td>
                    <td>Delete</td>
               </tr>";
    }
    echo "<tr><th><a href='add.php'>Add task</a></th></tr>";

}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();

}


?>