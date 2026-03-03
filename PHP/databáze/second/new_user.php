<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <label for="confirm_password">Confirm password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required><br><br>

        <button type="submit">Login</button>
        </form>

    <?php
        // Check if form is submitted and passwords are not empty
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];

            // Password confirmation check
            if ($password === $confirm_password)
            {
                // Here you can add your login logic (e.g., check the password in your database)
                // If login is successful, redirect to another PHP page
                header("Location: users.php"); // Redirect to a page (change "welcome.php" to your actual target page)
                exit();
            } 
            else 
            {
                echo "Passwords do not match. Please try again.";
            }
        }   
    ?>
</body>