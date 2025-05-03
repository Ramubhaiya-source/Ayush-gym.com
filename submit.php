<?php
// 1. Connect to MySQL database
$conn = new mysqli("localhost", "root", "", "your_database_name"); // Replace with your DB name

// 2. Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 3. Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$plan = $_POST['plan'];
$height = $_POST['height'];
$weight = $_POST['weight'];

// 4. Insert into table
$sql = "INSERT INTO gym_members (Name, `E-mail`, `Phone.No`, Plan, Height, Weight)
        VALUES ('$name', '$email', '$phone', '$plan', '$height', '$weight')";

if ($conn->query($sql) === TRUE) {
    echo "✅ Registration successful!";
} else {
    echo "❌ Error: " . $conn->error;
}

$conn->close();
?>
