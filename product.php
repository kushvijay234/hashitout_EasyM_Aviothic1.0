

    <div class="container">
        <h2 class="mt-4">Add Product</h2>
        <form action="process_product.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="productname">Product Name:</label>
                <input type="text" class="form-control" id="productname" name="productname" required>
            </div>
            <div class="form-group">
                <label for="productprice">Product Price:</label>
                <input type="text" class="form-control" id="productprice" name="productprice" required>
            </div>
            <div class="form-group">
                <label for="productimage">Product Image:</label>
                <input type="file" class="form-control" id="productimage" name="productimage" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
    </div>
   