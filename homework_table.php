<?php
    require "PDObject.php";

    $query = 'SELECT * FROM todos';
    $statement = $conn ->prepare($query);
    $statement->execute();
    $accounts = $statement->fetchAll();

    echo "Tasks: <br>";
    echo "(refresh page to see changes) <br>";
    echo "<table width = 45%; border = 1px>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>isdone</th> 
            <th>createddate</th>
            <th>duedate</th>
            
        
        </tr>";

    foreach ($accounts as $result) {
        $task = $result["id"];
        echo "<tr>
                    <td>".$result["id"]."</td>
                    <td>".$result["title"]."</td>
                    <td>".$result["message"]."</td>
                    <td>".$result["isdone"]."</td>  
                    <td>".$result["createddate"]."</td>
                    <td>".$result["duedate"]."</td>
                    
                  <td>
                   <a href=\"delete.php?id=$task\" class=\"edit\">Delete</a></td>  
                   <td>
                   <a href=\"edit.php?id=$task\" class=\"edit\">Edit</a></td>
                    
               </tr>";


    }




$statement->closeCursor();

?>




