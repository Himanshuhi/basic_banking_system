<?php
// Include your database connection file here
include 'db_connection.php';

// Fetch transactions from the database
$query = "SELECT * FROM transactions";
$result = mysqli_query($connection, $query);

// Fetch data and store it in an array
$transactions = [];
while ($row = mysqli_fetch_assoc($result)) {
    $transactions[] = $row;
}

// Close the database connection
mysqli_close($connection);

// Convert the PHP array to JSON and output it
header('Content-Type: application/json');
echo json_encode($transactions);
?>
