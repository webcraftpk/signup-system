<?php

$conn = new mysqli("localhost", "root", "", "signup_db");

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users (username, email, password)
        VALUES ('$username', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    header("Location: welcome.html");
    exit();
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

?>