<?php
$servername = "localhost";
$dbname = "nmdatabase";
$username = "root";
$password = "";
 
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    //print("Connected to $dbname at $servername successfully." . '<br>');
    
} 
catch (PDOException $pe) {
    die ("Could not connect to the database $dbname :" . $pe->getMessage());
}

//Remember to run codesniffer!!