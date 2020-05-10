<?php
    require "PDObject.php";

    $query = 'SELECT * FROM todos';
    $statement = $conn ->prepare($query);
    $statement->execute();
    $accounts = $statement->fetchAll();
    $statement->closeCursor();
/*

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
*/

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
<h1>Task list</h1>
<p>refresh page to see changes</p>

<!-- ENTIRE TABLE -->
<table width = 45%; border = 1px>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>createddate</th>
        <th>duedate</th>
        <th>Completed?</th>
    </tr>
<?php
foreach ($accounts as $result) {
    $task = $result["id"];
    echo "<tr>
                    <td>" . $result["id"] . "</td>
                    <td>" . $result["title"] . "</td>
                    <td>" . $result["message"] . "</td> 
                    <td>" . $result["createddate"] . "</td>
                    <td>" . $result["duedate"] . "</td>";

    if ($result["isdone"] == NULL) {
        echo "<td>
                    No
                    </td>";

    }

    if ($result["isdone"] == "on") {
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
?>


    <!-- INCOMPLETE TASK -->
    <table width = 45%; border = 1px>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>createddate</th>
            <th>duedate</th>
            <th>Completed?</th>



        </tr>

        <?php
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

        ?>
        <p>Incomplete Tasks</p>
        <!-- COMPLETE TASK -->

        <table width = 45%; border = 1px>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>createddate</th>
                <th>duedate</th>
                <th>Completed?</th>



            </tr>

            <?php
            foreach ($accounts as $result) {
                $task = $result["id"];
                if($result["isdone"] == "on") {
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
            <p>Complete Tasks</p>





</body>
</html>




