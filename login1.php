<?php
// Start a session
session_start();

// Hardcoded username and password
$hardcodedUsername = 'admin';
$hardcodedPassword = 'password123';

// Initialize message variable
$message = '';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from POST request
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Check if the provided credentials match the hardcoded values
    if ($username === $hardcodedUsername && $password === $hardcodedPassword) {
        $message = 'ACCESS GRANTED';
    } else {
        $message = 'ACCESS DENIED';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h1>Login</h1>
    <form method="post" action="">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
    <h2><?php echo $message; ?></h2>
</body>
</html>
