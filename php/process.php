<?php
$servername = "localhost"; 
$username = "root";
$password = ""; 
$dbname = "dashboard";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input
    $name = filter_var(trim($_POST["name"]), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $rating = filter_var(trim($_POST["rating"]));
    $comments = filter_var(trim($_POST["comments"]), FILTER_SANITIZE_STRING);

    // Validate inputs
    if (empty($name) || empty($email)) {
        die("Name and Email are required fields.");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }
    if (!is_numeric($rating) || $rating < 1 || $rating > 5) {
        die("Rating must be a number between 1 and 5.");
    }

    // Insert into database
    $stmt = $conn->prepare("INSERT INTO adminn (name, email, rating, comments) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssis", $name, $email, $rating, $comments);

    if ($stmt->execute()) {
        echo "User successfully added!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
