<?php
private $host = "us-cdbr-iron-east-05.cleardb.net";
private $db = "heroku_81410013fbe221f";
private $username = "bf4dbc3d315253";
private $password = "fbf505d7";

try {
    $conn = new PDO("mysql:host={$this->host};dbname={$this->db}", $this->username, $this->password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
// $sql = "CREATE DATABASE testDatabase";
// if (mysqli_query($conn, $sql)) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . mysqli_error($conn);
// }
//
// mysqli_close($conn);
