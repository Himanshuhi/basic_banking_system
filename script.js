function highlightButton(buttonId) {
    const button = document.getElementById(buttonId);
    
    // Remove glow from all buttons
    const allButtons = document.querySelectorAll('.service-box button');
    allButtons.forEach(btn => btn.classList.remove('glow'));
    
    // Add glow to the clicked button
    button.querySelector('button').classList.add('glow');
  }
 
  document.addEventListener("DOMContentLoaded", function () {
    // Get the customer table container
    var customerTable = document.getElementById("customerTable");
  
    // Create a table element
    var table = document.createElement("table");
  
    // Create the table header
    var thead = document.createElement("thead");
    var headerRow = document.createElement("tr");
    ["Name", "Email", "Account No", "Balance"].forEach(function (headerText) {
      var th = document.createElement("th");
      th.appendChild(document.createTextNode(headerText));
      headerRow.appendChild(th);
    });
    thead.appendChild(headerRow);
    table.appendChild(thead);
  
    // Create the table body
    var tbody = document.createElement("tbody");
    customers.forEach(function (customer) {
      var row = document.createElement("tr");
      ["name", "email", "accountNo", "balance"].forEach(function (prop) {
        var td = document.createElement("td");
        td.appendChild(document.createTextNode(customer[prop]));
        row.appendChild(td);
      });
      tbody.appendChild(row);
  
      // Add a spacer row with a single empty cell
      var spacerRow = document.createElement("tr");
      var spacerCell = document.createElement("td");
      spacerCell.setAttribute("colspan", "4"); // Set colspan to cover all columns
      spacerRow.appendChild(spacerCell);
      tbody.appendChild(spacerRow);
    });
    table.appendChild(tbody);
  
    // Append the table to the customer table container
    customerTable.appendChild(table);
  });
  


  document.addEventListener("DOMContentLoaded", function () {
    // Get the transaction table container
    var transactionTable = document.getElementById("transactionTable");
  
    // Create a table element
    var table = document.createElement("table");
  
    // Create the table header
    var thead = document.createElement("thead");
    var headerRow = document.createElement("tr");
    ["ID", "Sender's Account", "Sender's Name", "Receiver's Account", "Receiver's Name", "Amount Transferred", "Sender's Balance", "Transaction Status", "Time"].forEach(function (headerText) {
      var th = document.createElement("th");
      th.appendChild(document.createTextNode(headerText));
      headerRow.appendChild(th);
    });
    thead.appendChild(headerRow);
    table.appendChild(thead);
  
    // Create the table body
    var tbody = document.createElement("tbody");
    transactions.forEach(function (transaction) {
      var row = document.createElement("tr");
      ["id", "senderAccount", "senderName", "receiverAccount", "receiverName", "amountTransferred", "senderBalance", "transactionStatus", "time"].forEach(function (prop) {
        var td = document.createElement("td");
        td.appendChild(document.createTextNode(transaction[prop]));
        row.appendChild(td);
      });
      tbody.appendChild(row);
    });
    table.appendChild(tbody);
  
    // Append the table to the transaction table container
    transactionTable.appendChild(table);
  });

  

  document.addEventListener("DOMContentLoaded", function () {
    // Get the transfer form container
    var transferForm = document.getElementById("transferForm");
  
    // Create the transfer form
    var form = document.createElement("form");
    form.addEventListener("submit", handleTransfer);
  
    // Add heading
    var heading = document.createElement("h2");
    heading.appendChild(document.createTextNode("TRANSFER MONEY"));
    form.appendChild(heading);
  
    // Sender Account
    var senderAccountLabel = createLabel("Sender Account");
    var senderAccountSelect = createAccountSelect("Choose the sender", "senderAccount");
    form.appendChild(senderAccountLabel);
    form.appendChild(senderAccountSelect);
    form.appendChild(document.createElement("br")); // New line
  
    // Receiver Account
    var receiverAccountLabel = createLabel("Receiver Account");
    var receiverAccountSelect = createAccountSelect("Choose the receiver", "receiverAccount");
    form.appendChild(receiverAccountLabel);
    form.appendChild(receiverAccountSelect);
    form.appendChild(document.createElement("br")); // New line
  
    // Amount
    var amountLabel = createLabel("Amount");
    var amountInput = createInput("Enter the amount", "amount", "number", true);
    form.appendChild(amountLabel);
    form.appendChild(amountInput);
    form.appendChild(document.createElement("br")); // New line
  
    // Submit button
    var submitButton = document.createElement("button");
    submitButton.type = "submit";
    submitButton.appendChild(document.createTextNode("Send Money"));
    form.appendChild(submitButton);
  
    // Append the form to the transfer form container
    transferForm.appendChild(form);
  
    // Function to handle the form submission
    function handleTransfer(event) {
      event.preventDefault();
      var senderAccount = senderAccountSelect.value;
      var receiverAccount = receiverAccountSelect.value;
      var amount = parseFloat(amountInput.value);
  
      // Check if sender has enough balance
      var sender = customers.find(customer => customer.accountNo === senderAccount);
      if (sender && sender.balance >= amount) {
        // Perform the transfer
        sender.balance -= amount;
        var receiver = customers.find(customer => customer.accountNo === receiverAccount);
        if (receiver) {
          receiver.balance += amount;
          alert("Money successfully transferred!");
        } else {
          alert("Receiver not found.");
        }
      } else {
        alert("You don't have enough money.");
      }
    }
  
    // Function to create a label
    function createLabel(text) {
      var label = document.createElement("label");
      label.appendChild(document.createTextNode(text));
      return label;
    }
  
    // Function to create a select input for accounts
    function createAccountSelect(defaultText, id) {
      var select = document.createElement("select");
      var defaultOption = document.createElement("option");
      defaultOption.value = "";
      defaultOption.text = defaultText;
      select.appendChild(defaultOption);
  
      customers.forEach(function (customer) {
        var option = document.createElement("option");
        option.value = customer.accountNo;
        option.text = `${customer.accountNo} - ${customer.name}`;
        select.appendChild(option);
      });
  
      select.id = id;
      return select;
    }
  
    // Function to create an input
    function createInput(placeholder, id, type, required) {
      var input = document.createElement("input");
      input.type = type;
      input.placeholder = placeholder;
      input.id = id;
      input.required = required;
      return input;
    }
  });
  



  document.addEventListener("DOMContentLoaded", function () {
    // Get the customer table container
    var customerTable = document.getElementById("customerTable");

    // Fetch customer data from the server
    fetch("getCustomers.php")
        .then(response => response.json())
        .then(customers => {
            // Create a table element
            var table = document.createElement("table");

            // ... (continue with the rest of your JavaScript to populate the table)
        })
        .catch(error => console.error("Error fetching customer data:", error));
});
