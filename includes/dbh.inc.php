<?php
$servername = "us-cdbr-iron-east-05.cleardb.net";
$myDB = "heroku_81410013fbe221f";
$dbUsername = "bf4dbc3d315253";
$dbPassword = "fbf505d7";

try {
    $conn = new PDO("mysql:host=$servername;dbname=myDB", $dbUsername, $dbPassword);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
