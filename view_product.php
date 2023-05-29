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

// Retrieve data from the "products" table
$stmt = $db->query("SELECT * FROM products");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container">
        <h2 class="mt-4">Product List</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Product Image</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?php echo $product["productname"]; ?></td>
                    <td><?php echo $product["productprice"]; ?></td>
                    <td>
                        <img src="<?php echo $product["productimage"]; ?>" alt="Product Image" width="100" height="100">
                    </td>
                    <td><?php echo $product["created_at"]; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>