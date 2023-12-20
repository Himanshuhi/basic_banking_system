<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BASIC BANKING SYSTEM - All Customers</title>
  <link rel="stylesheet" href="styles.css">
  <!-- Link to jQuery for AJAX (optional, but useful for AJAX requests) -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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
      <h1>All Customers</h1>
      <div class="customer-table" id="customerTable">
        <!-- Customer details will be populated here using JavaScript -->
      </div>
    </div>
  </section>

  <footer>
    <p>All rights reserved to Himanshu Banking</p>
  </footer>

  <script>
    // You can use jQuery or vanilla JavaScript for AJAX requests to fetch data from the server.
    // Here, I'm using jQuery for simplicity.

    $(document).ready(function () {
      // Fetch customer data from the server using AJAX
      $.ajax({
        url: 'getCustomers.php', // Replace with the actual server-side script
        type: 'GET',
        dataType: 'json',
        success: function (data) {
          // Populate the customer table with data
          populateCustomerTable(data);
        },
        error: function (error) {
          console.error('Error fetching customer data:', error);
        }
      });

      // Function to populate the customer table
      function populateCustomerTable(data) {
        var tableHtml = '<table><thead><tr><th>Name</th><th>Email</th><th>Account No</th><th>Balance</th></tr></thead><tbody>';

        // Loop through the data and create table rows
        for (var i = 0; i < data.length; i++) {
          tableHtml += '<tr>';
          tableHtml += '<td>' + data[i].name + '</td>';
          tableHtml += '<td>' + data[i].email + '</td>';
          tableHtml += '<td>' + data[i].accountNo + '</td>';
          tableHtml += '<td>' + data[i].balance + '</td>';
          tableHtml += '</tr>';
        }

        tableHtml += '</tbody></table>';

        // Insert the HTML into the customerTable div
        $('#customerTable').html(tableHtml);
      }
    });
  </script>

</body>
</html>
