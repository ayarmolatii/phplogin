<?php
// Start a session
session_start();

class Login {
    private $hardcodedUsername = 'admin';
    private $hardcodedPassword = 'password123';
    private $message = '';

    // Method to handle the login process
    public function login($username, $password) {
        if ($username === $this->hardcodedUsername && $password === $this->hardcodedPassword) {
            $this->message = 'ACCESS GRANTED';
        } else {
            $this->message = 'ACCESS DENIED';
        }
    }

    // Getter for the message
    public function getMessage() {
        return $this->message;
    }
}

// Create an instance of the Login class
$login = new Login();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from POST request
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Call the login method
    $login->login($username, $password);
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
    <h2><?php echo $login->getMessage(); ?></h2>
</body>
</html>
