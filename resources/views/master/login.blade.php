<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card" style="width: 400px;">
            <div class="card-header">
                <h4 class="card-title text-center">Login</h4>
            </div>
            <div class="card-body">
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $username = $_POST["username"];
                        $password = $_POST["password"];

                        // Validate and authenticate the user here
                        if ($username == "admin" && $password == "password") {
                            // Redirect the user to the dashboard or homepage
                            header("Location: dashboard.php");
                            exit();
                        } else {
                            echo '<div class="alert alert-danger">Invalid username or password.</div>';
                        }
                    }
                ?>
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>