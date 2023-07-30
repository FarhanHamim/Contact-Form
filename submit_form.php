<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'contact_form';
$conn = new mysqli($host, $username, $password, $database);

// Checking connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// gettiing data from form
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Preparing and execute the SQL query to inserting the data into the database
$sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Form data submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
