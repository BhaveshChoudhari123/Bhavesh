<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Allow login with any credentials
    $_SESSION['username'] = $username;
    
    // Redirect to menu page
    header("Location: categories.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - OrderEase</title>
    <link rel="stylesheet" href="style.css">
    <style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
}

body {
    background: url('restrrr.png'); /* Background image */
    background-size: cover;
    background-position: center;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.login-container {
    background: rgba(0, 0, 0, 0.8); /* Semi-transparent black */
    padding: 30px;
    border-radius: 10px;
    text-align: center;
    width: 350px;
    box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.2);
}

h2 {
    color: #e78f38;
    margin-bottom: 20px;
    font-size: 24px;
}

p {
    color: red;
    font-size: 14px;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    color: #fff;
    font-size: 14px;
    margin-bottom: 5px;
    text-align: left;
}

input {
    padding: 10px;
    margin-bottom: 15px;
    border: none;
    border-radius: 5px;
    width: 100%;
}

button {
    background: red;
    color: white;
    padding: 10px;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

button:hover {
    background: #e78f38;
}
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login to OrderEase</h2>
        <?php if (isset($error)) { echo "<p style='color:red;'>$error</p>"; } ?>
        <form method="POST" action="">
            <label>Username:</label>
            <input type="text" name="username" required>
            <label>Password:</label>
            <input type="password" name="password" required>
            <button type="submit">Login</button>
            <button type="button" class="btn btn-primary" onclick="document.location='register.html'">Sign up</button>
        </form>
    </div>
</body>
</html>