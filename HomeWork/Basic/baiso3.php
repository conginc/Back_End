
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng 100 Dòng, 3 Cột</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>

<table>
    <thead>
        <tr>
            <th>Tiêu đề 1</th>
            <th>Tiêu đề 2</th>
            <th>Tiêu đề 3</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Tạo bảng với 100 dòng và 3 cột
        for ($i = 1; $i <= 100; $i++) {
            echo "<tr>";
            echo "<td>cột 1, hàng $i</td>";
            echo "<td>cột 2, hàng $i</td>";
            echo "<td>cột 3, hàng $i</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>
