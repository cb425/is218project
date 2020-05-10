<?php
    require "PDObject.php";

    $query = 'SELECT * FROM todos';
    $statement = $conn ->prepare($query);
    $statement->execute();
    $accounts = $statement->fetchAll();
    $statement->closeCursor();

    echo "Tasks: <br>";
    echo "(refresh page to see changes) <br>";
    echo "<table width = 45%; border = 1px>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>createddate</th>
            <th>duedate</th>
            <th>Completed?</th> 
            
            
        
        </tr>";

    foreach ($accounts as $result) {
        $task = $result["id"];
        echo "<tr>
                    <td>".$result["id"]."</td>
                    <td>".$result["title"]."</td>
                    <td>".$result["message"]."</td> 
                    <td>".$result["createddate"]."</td>
                    <td>".$result["duedate"]."</td>";

        if ($result["isdone"] == NULL)
        {
            echo "<td>
                    No
                    </td>";

        }

        if ($result["isdone"] == "on")
        {
            echo "<td>
                    Yes
                    </td>";
        }


        echo "<td>
                   <a href=\"delete.php?id=$task\" class=\"edit\">Delete</a></td>  
                   <td>
                   <a href=\"edit.php?id=$task\" class=\"edit\">Edit</a></td>
                    
               </tr>";


    }

    echo "<a href=\"add.php\">Add task</a>";


    //INCOMPLETE TASKS
echo "<table width = 45%; border = 1px>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>createddate</th>
            <th>duedate</th>
            <th>Completed?</th> 
            
            
        
        </tr>";

foreach ($accounts as $result) {
    $task = $result["id"];
    if($result["isdone"] == NULL) {
        echo "<tr>
                    <td>" . $result["id"] . "</td>
                    <td>" . $result["title"] . "</td>
                    <td>" . $result["message"] . "</td> 
                    <td>" . $result["createddate"] . "</td>
                    <td>" . $result["duedate"] . "</td>
                    <td>No</td>
                    <td>
                    <a href=\"delete.php?id=$task\" class=\"edit\">Delete</a></td>  
                    <td>
                    <a href=\"edit.php?id=$task\" class=\"edit\">Edit</a></td>
                    
               </tr>";
    }
}




    //COMPLETED TASKS

echo "<table width = 45%; border = 1px>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>createddate</th>
            <th>duedate</th>
            <th>Completed?</th> 
            
            
        
        </tr>";

foreach ($accounts as $result) {
    $task = $result["id"];
    if ($result["isdone"] == "on") {
        echo "<tr>
                    <td>" . $result["id"] . "</td>
                    <td>" . $result["title"] . "</td>
                    <td>" . $result["message"] . "</td> 
                    <td>" . $result["createddate"] . "</td>
                    <td>" . $result["duedate"] . "</td>
                    <td>Yes</td>
                    <td>
                    <a href=\"delete.php?id=$task\" class=\"edit\">Delete</a></td>  
                    <td>
                    <a href=\"edit.php?id=$task\" class=\"edit\">Edit</a></td>
                    
               </tr>";
    }
}





?>




