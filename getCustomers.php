<?php

$servername = "your_server_name";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch customers from the database
$sql = "SELECT * FROM customers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $customers = array();

    while ($row = $result->fetch_assoc()) {
        $customers[] = $row;
    }

    echo json_encode($customers);
} else {
    echo "0 results";
}

$conn->close();

?>
