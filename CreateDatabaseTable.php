<?php

$servername = "localhost";
$username = "paghamba1";
$password = "paghamba1";
$dbname = "paghamba1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//sql to create users tables
$users = "CREATE TABLE users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";


if ($conn->query($users) === TRUE) {
    echo "Users Table Successfully Created";
    echo "\n";
} else {
    echo "Error creating table: " . $conn->error;
    echo "\n";
}

// sql to create album table
$album = "CREATE TABLE Albums (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    artistName VARCHAR(30) NOT NULL,
    albumName VARCHAR(30) NOT NULL,
    albumYear INT(4) NOT NULL
    )";

if ($conn->query($album) === TRUE) {
    echo "Albums Table Successfully Created";
    echo "\n";
} else {
    echo "Error creating table: " . $conn->error;
    echo "\n";
}

$conn->close();
