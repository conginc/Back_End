<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .Frame{
            border: 2px solid #000;
            /* Đổi màu và độ dày của khung theo nhu cầu */
            padding: 20px;
            /* Thêm khoảng cách giữa nội dung và khung */
            width: 500px;
            /* Đổi kích thước của khung theo nhu cầu */
        }
    </style>
</head>
<body>
    <div class="Frame">
        <h2>Tìm kiếm</h2>  
        <form action="" method="get">
        <label for="tu-khoa">Nhập từ khóa: </label>
        <input type="text" name="tu-khoa" id="tu-khoa">
        <input type="submit" value="Tìm">
        </form>
        
        
        <?php
            if (isset($_GET['tu-khoa'])) {
                $tuKhoa = $_GET['tu-khoa'];
                $results = [];  // Khởi tạo mảng kết quả tìm kiếm
                
                // Hiển thị kết quả
                if (!empty($results)) {
                    echo "Kết quả tìm kiếm với từ khóa '$tuKhoa':<br>";
                    echo "<ul>";
                    foreach ($results as $result) {
                        echo "<li>$result</li>";
                    }
                    echo "</ul>";
                } else {
                    echo "Không tìm thấy kết quả cho từ khóa '$tuKhoa'.";
                }
            } else {
                echo "Vui lòng nhập từ khóa và nhấn nút 'Tìm' để tìm kiếm.";
            }
            
            ?>
    </div>
</body>
</html>