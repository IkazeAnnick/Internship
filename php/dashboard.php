<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dashboard";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error){
 die("Connection failed: " . $conn->connect_error);
} 

//Create database
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
echo "Database created successfully or already exists.<br>";
} else {
echo "Error creating database: " . $conn->error;
}

$conn->select_db($dbname);

$sql = "CREATE TABLE IF NOT EXISTS adminn (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    rating INT CHECK (rating BETWEEN 1 AND 5),
    comments TEXT
    )";
    
    if ($conn->query($sql) === TRUE) {
    echo "Table adminn created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    } 
    ?>