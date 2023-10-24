<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <th>HoTen</th>
            <th>TinHoc</th>
            <th>KTLT</th>
            <th>MMT</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $sinhvien = array(
            'sv1'=> array('Tinhoc'=>10,'KTLT'=>8,'MMT'=>10),
            'sv2'=> array('Tinhoc'=>8,'KTLT'=>8,'MMT'=>9),
            'sv3'=> array('Tinhoc'=>9,'KTLT'=>7,'MMT'=>8),
        );
        foreach($sinhvien as $key => $diem){
            echo '<tr>';
                echo '<td>'.$key.'</td>';
                echo '<td>'.$diem['Tinhoc'].'</td>';
                echo '<td>'.$diem['KTLT'].'</td>';
                echo '<td>'.$diem['MMT'].'</td>';
            echo '</tr>';
            
        }
        
    ?>
</table>
</body>
</html>