<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Đăng ký thông tin người dùng</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];

        require_once "User.php";
        $user = new User($username, $password, $firstName, $lastName);

        echo "<h2>Thông tin người dùng đã đăng ký:</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Username</th><th>Full name</th></tr>";
        echo "<tr><td>{$user->getUsername()}</td><td>{$user->getFullname()}</td></tr>";
        echo "</table>";
    }
    ?>

    <h2>Đăng ký thông tin người dùng</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <label for="firstName">First Name:</label>
        <input type="text" name="firstName" required><br>

        <label for="lastName">Last Name:</label>
        <input type="text" name="lastName" required><br>

        <input type="submit" value="Đăng ký">
    </form>
</body>
</html>
