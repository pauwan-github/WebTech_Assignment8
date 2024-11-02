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

$sql = "UPDATE expenses SET amount='$amount' WHERE expense_name='$expense_name'";

if ($conn->query($sql) === TRUE) {
    echo "Expense updated successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
