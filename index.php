<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BASIC BANKING SYSTEM</title>
  <link rel="stylesheet" href="styles.css">
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
    <div class="content">
      <h1>Welcome to Himanshu Bank</h1>
    </div>
    <img src="bank.png" alt="Bank Image" class="bank-image">
  </section>

  <center>
    <div class="contentbox">
      <h1>OUR SERVICES</h1>
  
      <div class="subcontent">
        <img src="customer.jpg" alt="View Customers" width="50%" height="30%">
        <h2><a href="customers.php">View Customers</a></h2>
        <h4>Here you can view the details of every customer of the bank</h4>
      </div>
      
      <div class="subcontent">
        <img src="transfer.png" alt="Transfer money" width="50%" height="30%">
        <h2><a href="sendmoney.php">Transfer Money</a></h2>
        <h4>Here you can send money from your account</h4>
      </div>
      
      <div class="subcontent">
        <img src="transaction.jpg" alt="Check Transactions" width="50%" height="30%">
        <h2><a href="transactions.php">Transactions</a></h2>
        <h4>Here you can check the transactions involved</h4>
      </div>      
    </div>
  </center>  

  <footer>
    <p>All rights reserved to Himanshu Banking</p>
  </footer>

  <script src="script.js"></script>
</body>
</html>
