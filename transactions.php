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
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BASIC BANKING SYSTEM - Transaction History</title>
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
      <h1>Transaction History</h1>
      <div class="transaction-table" id="transactionTable">
        <!-- Transaction details will be populated here using JavaScript -->
      </div>
    </div>
  </section>

  <footer>
    <p>All rights reserved to Himanshu Banking</p>
  </footer>

  <script>
    // Pass the PHP array to JavaScript
    var transactions = <?php echo json_encode($transactions); ?>;
  </script>

  <script src="script.js" defer></script>

</body>
</html>
