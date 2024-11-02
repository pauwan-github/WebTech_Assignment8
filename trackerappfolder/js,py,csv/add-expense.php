<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "expense_manager";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$expense_name = $_POST['expense_name'];
$amount = $_POST['amount'];

$sql = "INSERT INTO expenses (expense_name, amount) VALUES ('$expense_name', '$amount')";

if ($conn->query($sql) === TRUE) {
    echo "Expense added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
