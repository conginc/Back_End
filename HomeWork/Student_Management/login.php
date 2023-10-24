<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        require_once "User.php";
        $user = new User("admin", "hashed_password", "Admin", "User");

        if ($user->login($username, $password)) {
            echo "Logged in successfully";
        } else {
            echo "Login failed. Please check your username and password.";
        }
    }
    ?>

    <h2>Đăng nhập</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Đăng nhập">
    </form>
</body>
</html>
