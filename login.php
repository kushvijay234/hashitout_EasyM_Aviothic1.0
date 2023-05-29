
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
    $password = $_POST["password"];

    // Prepare the SQL statement
    $stmt = $db->prepare("SELECT * FROM users WHERE userid = :userid AND password = :password");

    // Bind parameters to the statement
    $stmt->bindParam(":userid", $userid);
    $stmt->bindParam(":password", $password);

    // Execute the statement
    $stmt->execute();

    // Check if there is a matching record
    if ($stmt->rowCount() > 0) {
        // Redirect to another page upon successful login
        header("Location: admin.php");
        exit();
    } else {
        echo "Invalid credentials. Please try again.";
    }
}
?>
