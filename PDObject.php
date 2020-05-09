<?php

$servername = "sql1.njit.edu";// you need to put your assigned server name
$username = "cb425";// your ucid
$password = "Megurine123/";// database password
$dbname = "cb425"; // your ucid is your database name

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";

}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();

}

?>