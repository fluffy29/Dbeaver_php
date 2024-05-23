<?php

// Database connection
$servername = "localhost";
$username = "root";
$password = "Acsdoha2023!";
$dbname = "data_base";
$port = 3306;

$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare SQL select statement
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<h2>Submitted Products</h2>";
  echo "<table>";
  echo "<tr><th>Item Code</th><th>Item Description</th><th>Unit Price</th><th>Discount</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["item_code"] . "</td><td>" . $row["item_description"] . "</td><td>" . $row["unit_price"] . "</td><td>" . $row["discount"] . "</td></tr>";
  } 
  echo "</table>"; 
}