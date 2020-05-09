
<?php

function delete($id)
{
    global $db;

    $statement = "DELETE FROM todos WHERE id = :message";
    $statement2 = $db->prepare($statement);
    $statement2->bindValue(":message" , $id);
    $statement2->execute();
}

?>