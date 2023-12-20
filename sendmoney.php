<?php
// Include your database connection file here
include 'db_connection.php';

// Fetch customers from the database
$query = "SELECT * FROM customers";
$result = mysqli_query($connection, $query);

// Fetch data and store it in an array
$customers = [];
while ($row = mysqli_fetch_assoc($result)) {
    $customers[] = $row;
}

// Close the database connection
mysqli_close($connection);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BASIC BANKING SYSTEM - Transfer Money</title>
  <link rel="stylesheet" href="styles.css">
  <script src="script.js" defer></script>
</head>
<body>

  <header>
    <h1>BASIC BANKING SYSTEM</h1>
  </header>

  <nav>
    <a href="index.php">Home</a>
    <a href="sendmoney.php">Send Money</a>
    <a href="customers.php">View All Customers</a>
    <a href="transactions.php">Transactions</a>
    <a href="aboutus.php">About Us</a>
  </nav>

  <div class="divider"></div>

  <section>
    <div class="contentbox">
      <h1>TRANSFER MONEY</h1>
      <div class="transfer-form" id="transferForm">
        <!-- Transfer form content will be populated here using JavaScript -->
      </div>
    </div>
  </section>

  <footer>
    <p>All rights reserved to Himanshu Banking</p>
  </footer>

  <script>
    // Pass the PHP array to JavaScript
    var customers = <?php echo json_encode($customers); ?>;
  </script>

  <script src="script.js" defer></script>

</body>
</html>
