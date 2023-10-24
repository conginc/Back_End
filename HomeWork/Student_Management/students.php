<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thông tin Sinh viên</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $gpa = floatval($_POST["gpa"]);

        require_once "Student.php";
        $student = new Student($username, $password, $firstName, $lastName, $gpa);

        echo "<h2>Thông tin Sinh viên:</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Username</th><th>Full Name</th><th>GPA</th><th>Xếp loại</th></tr>";
        echo "<tr><td>{$student->getUsername()}</td><td>{$student->getFullname()}</td><td>{$student->getGpa()}</td><td>{$student->rank()}</td></tr>";
        echo "</table>";
    }
    ?>

    <h2>Nhập thông tin Sinh viên</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <label for="firstName">First Name:</label>
        <input type="text" name="firstName" required><br>

        <label for="lastName">Last Name:</label>
        <input type="text" name="lastName" required><br>

        <label for="gpa">GPA:</label>
        <input type="number" step="0.01" name="gpa" required><br>

        <input type="submit" value="Xác nhận">
    </form>
</body>
</html>
