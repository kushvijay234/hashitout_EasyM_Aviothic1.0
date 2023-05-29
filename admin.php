<?php
// Start the session
session_start();
?>
<?php include 'admin_header.php'; ?> 

    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" id="dashboard-tab" data-bs-toggle="pill" href="#dashboard">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="view-product-tab" data-bs-toggle="pill" href="#view-product">View Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="add-product-tab" data-bs-toggle="pill" href="#add-product">Add Product</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-9">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="dashboard">
                        <h3>Dashboard Content</h3>
                        <!-- Add your content for the Dashboard tab here -->
                    </div>
                    <div class="tab-pane fade" id="view-product">
                        <h3>View Product Content</h3>
                        <!-- Add your content for the View Product tab here -->
                    </div>
                    <div class="tab-pane fade" id="add-product">
                        <!-- Add your content for the Add Product tab here -->
                        <?php include 'product.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
