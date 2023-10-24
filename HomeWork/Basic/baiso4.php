<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chọn Ngày Tháng Năm</title>
</head>
<body>

<form method="post" action="">
    <label for="day">Ngày:</label>
    <select name="day" id="day">
        <?php
        // Tạo các tùy chọn cho ngày từ 1 đến 31
        for ($i = 1; $i <= 31; $i++) {
            echo "<option value=\"$i\">$i</option>";
        }
        ?>
    </select>

    <label for="month">Tháng:</label>
    <select name="month" id="month">
        <?php
        // Tạo các tùy chọn cho tháng từ 1 đến 12
        for ($i = 1; $i <= 12; $i++) {
            echo "<option value=\"$i\">$i</option>";
        }
        ?>
    </select>

    <label for="year">Năm:</label>
    <select name="year" id="year">
        <?php
        // Tạo các tùy chọn cho năm từ 1990 đến 2020
        for ($i = 1990; $i <= 2020; $i++) {
            echo "<option value=\"$i\">$i</option>";
        }
        ?>
    </select>

    <input type="submit" value="Chọn">
</form>

<?php
// Xử lý dữ liệu sau khi submit (nếu cần)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedDay = $_POST["day"];
    $selectedMonth = $_POST["month"];
    $selectedYear = $_POST["year"];

    // Xử lý dữ liệu, ví dụ: in ra ngày được chọn
    echo "<p>Bạn đã chọn ngày $selectedDay, tháng $selectedMonth, năm $selectedYear.</p>";
}
?>

</body>
</html>
