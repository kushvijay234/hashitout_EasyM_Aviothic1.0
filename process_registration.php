
<?php
// Assuming you already have a MySQL database setup with appropriate credentials

// Database configuration
$hostname = "localhost"; // Replace with your database hostname
$username = "root";      // Replace with your database username
$password = "";  // Replace with your database password
$database = "hashitout"; // Replace with your database name

// Create a new PDO instance
try {
    $db = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $userid = $_POST["userid"];
    $shopname = $_POST["shopname"];
    $password = $_POST["password"];

    // Prepare the SQL statement
    $stmt = $db->prepare("INSERT INTO users (userid, shopname, password) VALUES (:userid, :shopname, :password)");

    // Bind parameters to the statement
    $stmt->bindParam(":userid", $userid);
    $stmt->bindParam(":shopname", $shopname);
    $stmt->bindParam(":password", $password);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $stmt->errorInfo()[2];
    }
}
?>
