<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Danh Mục</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

 <table>
    <thead>
        <tr>
            <th>Trang Chủ</th>
            <th>Sản Phẩm</th>
            <th>Giới Thiệu</th>
            <th>Dịch VỤ</th>
            <th>Liên Hệ</th>
        </tr>
    </thead>
    <tbody>
        <?php
        for ($i =1; $i <=5; $i++) {
        echo"<tr>";
        echo"<td><td>";
        echo"<td>Sản phẩm $i<td>";
        echo"<td><td>";   
        echo"<tr>";
    }
        ?>
    </tbody>
 </table>
<?php


?>

</body>
</html>
