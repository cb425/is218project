<?php
require "PDObject.php";


    $query = 'SELECT * FROM todos ORDER BY duedate';
    $statement = $conn ->prepare($query);
    $statement->execute();
    $accounts = $statement->fetchAll();



    echo "Tasks: <br>";
    echo "<table width = 45%; border = 1px>
        <tr>
            <th>Task</th>
            <th>Title</th>
            <th>isdone</th> 
            <th>createddate</th>
            <th>duedate</th>
            
        
        </tr>";
$operation = 'aa';
$taskId = 0;
    foreach ($accounts as $result) {

        echo "<tr>
                    <td>".$result["id"]."</td>
                    <td>".$result["message"]."</td>
                    <td>".$result["isdone"]."</td>  
                    <td>".$result["createddate"]."</td>
                    <td>".$result["duedate"]."</td>
                    
                  <td>
                  <form method=\"post\">
                   <button type=\"\"submit\" name=\"delete\"/>delete</button></form>
                   </form>
                   </td>  
                    
               </tr>";
        if(isset($_POST["delete"])) {
            $taskId = $result["id"];
            $operation = 'delete';
        }


    }





if($operation == 'delete'){
    $query = "DELETE FROM todos WHERE id = $taskId";
    $statement = $conn->prepare($query);
    $statement->execute();
    $statement->closeCursor();
}
    /*echo "<tr><th><a href='add.php'>Add task</a></th>
    <td><a href='edit.php'> Edit</a></td>
    <td><button id='delete'>Delete</button></td>*/


$statement->closeCursor();

?>


