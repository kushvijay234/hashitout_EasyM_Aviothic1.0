
<?php include 'Header.php'; ?>  


    <div class="container register">
        <h2 class="mt-4">Login</h2>
        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="userid">User ID:</label>
                <input type="text" class="form-control" id="userid" name="userid" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
    

<?php include 'footer.php'; ?>

