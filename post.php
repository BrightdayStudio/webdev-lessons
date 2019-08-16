<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";
$table = "people"

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO $table (fname, lname, age, email) VALUES ('John', 'Doe', ,'28', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
