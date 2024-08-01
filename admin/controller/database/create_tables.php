<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "agrimart";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

 // sql to create Users table
 $sql = "CREATE TABLE users 
 (
     id INT(2) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
     fname VARCHAR(30) NOT NULL,
     lname VARCHAR(30) NOT NULL,
     email VARCHAR(255) NOT NULL,
     username VARCHAR(10) NOT NULL,
     pass VARCHAR(255) NOT NULL,
     mobile VARCHAR(10) NOT NULL,
     address VARCHAR(300) NOT NULL,
     user_role INT(1) NOT NULL DEFAULT '2'
 )";
 
 if (mysqli_query($conn, $sql)) {
     echo "Table Users created successfully";
 } else {
     echo "Error creating table: " . mysqli_error($conn);
 }

 //sql to create products table
$sql="CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL,
    -- quantity INT NOT NULL,
    category VARCHAR(255) NOT NULL,
    image_url VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    status ENUM('Available', 'Out of Stock') DEFAULT 'Available'
)";

if (mysqli_query($conn, $sql)) {
    echo "Table products created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
 

 // sql to create feedback table    
$sql = "CREATE TABLE feedback (
        name VARCHAR(255)NOT NULL,
        email VARCHAR(255)NOT NULL,
        message VARCHAR(255)NOT NULL
        
    )";
if (mysqli_query($conn, $sql)) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}


mysqli_close($conn);

?>