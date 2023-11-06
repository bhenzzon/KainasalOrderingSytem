<?php
$servername = "your_server_name"; // Replace with your server name
$username = "your_username";       // Replace with your database username
$password = "your_password";       // Replace with your database password
$database = "kainasal";            // Replace with your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully to the 'kainasal' database.";

    // Now you can perform operations on the tables 'admin,' 'menu,' 'deliver,' and 'orderdetails'
    
    // Example query to fetch data from the 'menu' table
    $sql = "SELECT * FROM Menu";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "Menu: " . $row["ProdName"] . " Price: $" . $row["price"] . "<br>";
        }
    } else {
        echo "No menu items found.";
    }

    // Don't forget to close the connection when you're done
    $conn->close();
}
?>
