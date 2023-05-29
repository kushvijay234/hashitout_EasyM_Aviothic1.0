 <!-- <?php
$host = 'localhost';
$dbname = 'hashitout';
$user = 'root';
$pass = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>

 <?php
require_once 'db_connect.php';

// Rest of your code for processing the registration form
// You can use the $conn variable to perform database operations
?> --> 
