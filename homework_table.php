<?php
    require_once"PDObject.php";

    $query = 'SELECT * FROM todos ORDER BY duedate';
    $statement = $conn ->prepare($query);
    $statement->execute();
    $accounts = $statement->fetchAll();
    $statement->closeCursor();
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

<?php

            require_once"PDObject.php";
            $query = 'SELECT * FROM accounts ORDER BY id DESC LIMIT 1';
            $statement = $conn ->prepare($query);
            $statement->execute();
            $theData = $statement->fetch(PDO::FETCH_ASSOC);
            $statement->closeCursor();

            echo "User: ". $theData['fname']. " " . $theData['lname'];
            //echo "<br><a href=\"signout.html\">Signout</a>";
            ?>
<center>
    <container>
<h1>Homework Tracker</h1>




<!-- ENTIRE TABLE -->
<h3>All Assignments</h3>
<table>
    <tr>

        <th>Title</th>
        <th>Description</th>
        <th>Date Created</th>
        <th>Due Date</th>
        <th>Completed?</th>
    </tr>
<?php
foreach ($accounts as $result) {
    $task = $result["id"];
    echo "<tr>

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

    echo "<td class=\"actionbutton\">
                   <a href=\"delete.php?id=$task\" class=\"edit\">Delete</a></td>  
                   <td  class=\"actionbutton\" >
                   <a href=\"edit.php?id=$task\" class=\"edit\">Edit</a></td>
                    
               </tr>";
}
?>
</table>
    <p><a class="addbutton" href="add.php">Add Assignment</a></p>


    <!-- INCOMPLETE TASK -->
    <h3>Incomplete Assignments</h3>
    <table>
        <tr>

            <th>Title</th>
            <th>Description</th>
            <th>Date Created</th>
            <th>Due Date</th>
            <th>Completed?</th>



        </tr>

        <?php
        foreach ($accounts as $result) {
            $task = $result["id"];
            if($result["isdone"] == NULL) {
                echo "<tr>

                    <td>" . $result["title"] . "</td>
                    <td>" . $result["message"] . "</td> 
                    <td>" . $result["createddate"] . "</td>
                    <td>" . $result["duedate"] . "</td>
                    <td>No</td>
                    <td class=\"actionbutton\">
                    <a href=\"delete.php?id=$task\" class=\"edit\">Delete</a></td>  
                    <td class=\"actionbutton\">
                    <a href=\"edit.php?id=$task\" class=\"edit\">Edit</a></td>
                    
               </tr>";
            }
        }

        ?>
    </table>

        <!-- COMPLETE TASK -->
        <h3>Complete Assignments</h3>
        <table>
            <tr>

                <th>Title</th>
                <th>Description</th>
                <th>Date Created</th>
                <th>Due Date</th>
                <th>Completed?</th>



            </tr>

            <?php
            foreach ($accounts as $result) {
                $task = $result["id"];
                if($result["isdone"] == "on") {
                    echo "<tr>

                    <td>" . $result["title"] . "</td>
                    <td>" . $result["message"] . "</td> 
                    <td>" . $result["createddate"] . "</td>
                    <td>" . $result["duedate"] . "</td>
                    <td>Yes</td>
                    <td class=\"actionbutton\" >
                    <a href=\"delete.php?id=$task\" class=\"edit\">Delete</a></td>  
                    <td  class=\"actionbutton\">
                    <a href=\"edit.php?id=$task\" class=\"edit\">Edit</a></td>
                    
               </tr>";
                }
            }

            ?>



        </table>
    <p><br></p><p></p>
</container>

    <div class="footer">
        <p>Copyright 2020 Haydy Abdalla, Ross Bonifacio, Reesha Gandhi, Stuti Vyas</p>
    </div>

</center>




</body>
</html>




