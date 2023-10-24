<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai So 2</title>
</head>
<body>

<?php
// In ra dãy số từ 1 đến 30
for ($i = 1; $i <= 30; $i++) {
    // Kiểm tra số lẻ
    if ($i % 2 == 1) {
        // In số lẻ đậm và có màu xanh dương
        echo '<span style="font-weight: bold; color: #0000FF;">' . $i . '</span>';
    } else {
        // In số chẵn
        echo $i;
    }

    // Thêm khoảng trắng giữa các số
    echo ' ';
}
?>

</body>
</html>
