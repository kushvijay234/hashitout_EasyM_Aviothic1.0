
<?php include 'Header.php'; ?>    


    <div class="container register">
        <h2>Registration Form</h2>
        <form action="process_registration.php" method="POST">
            <div class="form-group">
                <label for="userid">User ID: (Uses your Whatsapp Number)</label>
                <input type="text" class="form-control" id="userid" name="userid" required>
            </div>
            <div class="form-group">
                <label for="shopname">Shop Name:</label>
                <input type="text" class="form-control" id="shopname" name="shopname" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>


    



<?php include 'footer.php'; ?>

