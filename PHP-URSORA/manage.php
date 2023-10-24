<?php
$servername = "localhost"; // XAMPP's default server name
$username = "root"; // Default username for MySQL
$password = ""; // Default password for MySQL is empty
$database = "pointofsale"; // Change this to the name you chose for your database

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['manage_name']) && isset($_POST['manage_department']) && isset($_POST['manage_phone'])) {
        $manage_name = $_POST['manage_name'];
        $manage_department = $_POST['manage_department'];
        $manage_phone = $_POST['manage_phone'];

        // Check if the fields are not empty
        if (!empty($manage_name) && !empty($manage_department) && !empty($manage_phone)) {
            // Example SQL query to insert data into a table
            $table = "manage_menu"; // Replace with your table name
            $sql = "INSERT INTO `$table` (`manage_name`, `manage_department`, `manage_phone`) VALUES ('$manage_name', '$manage_department', '$manage_phone')";

            if ($conn->query($sql) === TRUE) {
                echo "Data inserted successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
        } else {
            echo "Both Menu Name and Menu Description are required.";
        }
    } else {
        echo "Menu Name and Menu Description are required.";
    }
}

$conn->close();
?>
