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

// Start the session




// Process the form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $productname = $_POST['productname'];
    $productprice = $_POST['productprice'];
    $userid = $_POST['userid'];

    // Handle the uploaded product image
    $targetDir = 'products/'; // Directory where the uploaded images will be stored
    $targetFile = $targetDir . basename($_FILES['productimage']['name']);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if the uploaded file is an image
    $check = getimagesize($_FILES['productimage']['tmp_name']);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo 'Error: Invalid image file.';
        $uploadOk = 0;
    }

    // Check if the file already exists
    if (file_exists($targetFile)) {
        echo 'Error: File already exists.';
        $uploadOk = 0;
    }

    // Check file size (limit to 2MB in this example)
    if ($_FILES['productimage']['size'] > 2097152) {
        echo 'Error: File size exceeds the limit.';
        $uploadOk = 0;
    }

    // Allow only specific file formats (e.g., JPEG, PNG)
    $allowedFormats = array('jpg', 'jpeg', 'png');
    if (!in_array($imageFileType, $allowedFormats)) {
        echo 'Error: Only JPG, JPEG, and PNG files are allowed.';
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by any error
    if ($uploadOk == 0) {
        echo 'Error: File upload failed.';
    } else {
        // If everything is ok, move the uploaded file to the target directory
        if (move_uploaded_file($_FILES['productimage']['tmp_name'], $targetFile)) {
            // Insert the product data into the database
            $stmt = $db->prepare("INSERT INTO products (userid, productname, productprice, productimage) VALUES (:userid, :productname, :productprice, :productimage)");
            $stmt->bindParam(':userid', $userid);
            $stmt->bindParam(':productname', $productname);
            $stmt->bindParam(':productprice', $productprice);
            $stmt->bindParam(':productimage', $targetFile);
            $stmt->execute();

            echo 'Product added successfully!';
        } else {
            echo 'Error: Failed to move the uploaded file.';
        }
    }
}
?>
