<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "Acsdoha2023!";
$dbname = "simple_website";
$port = 3306;

$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Form submission handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item_code = $_POST['item_code'];
    $item_description = $_POST['item_description'];
    $unit_price = $_POST['unit_price'];
    $discount = $_POST['discount'];

    // SQL query to insert data into products table
    $sql = "INSERT INTO products (item_code, item_description, unit_price, discount)
            VALUES ('$item_code', '$item_description', '$unit_price', '$discount')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>