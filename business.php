
<?php include 'Header.php'; ?>    
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
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


    <div class="container">
        <div class="row">
            <div>
            <h3> State: Uttar Pradesh | District: Kanpur Nagar | Ward: 01 </h3><br></div>
            <?php foreach ($rows as $row): ?>
            <div class="col-sm-3 mb-3">
                <div class="card">
                    <img src="<?php echo $row["productimage"]; ?>" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title" id="productName"><?php echo $row["productname"]; ?></h5>
                        <p class="card-text" id="productPrice"><?php echo $row["productprice"]; ?></p>
                        <!-- Add more card content for other columns in your "products" table -->
                        <a href="https://wa.me/+916387501137?text=Product%20Name%3A%20Value%0AProduct%20Price%3A%20Value"  class="btn btn-primary ">Buy Now</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    
    
<?php include 'footer.php'; ?>
