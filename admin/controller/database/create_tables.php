<?php include 'db.php'; ?>
<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="agrimart";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    
    // sql to create Users table
    $sql="CREATE TABLE products (
        product_id INT AUTO_INCREMENT PRIMARY KEY,
        product_name VARCHAR(255) NOT NULL,
        product_description TEXT,
        product_price DECIMAL(10, 2) NOT NULL,
        product_image VARCHAR(255),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    if (mysqli_query($conn, $sql)) {
        echo "Table created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }
    
    
    mysqli_close($conn);

?>