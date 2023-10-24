<?php
    $khaiVi =[];
    $monChinh =[];
    $monTrangMieng =[];
    if(isset($_POST['khaiVi'])){
        $khaiVi = $_POST['khaiVi'];
    }
    if(isset($_POST['monChinh'])){
        $monChinh = $_POST['monChinh'];
    }
    if(isset($_POST['monTrangMieng'])){
        $monTrangMieng = $_POST['monTrangMieng'];
    }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>menu</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center" >Thuc don da chon</h1>
        <div class="row">
            <div class="col-md-4">
                <h4>Mon khai vi</h4>
                <ul>
                    <?php
                        foreach ($khaiVi as $item) :
                    ?>
                    <li><?php echo $item; ?></li>
                    <?php
                        endforeach
                    ?>
                </ul>
            </div>
            <div class="col-md-4">
                <h4>Mon chinh</h4>
                <ul>
                    <?php
                        foreach ($monChinh as $item) :
                    ?>
                    <li><?php echo $item; ?></li>
                    <?php
                        endforeach
                    ?>
                </ul>
            </div>
            <div class="col-md-4">
                <h4>Mon trang mieng</h4>
                <ul>
                    <?php
                        foreach ($monTrangMieng as $item) :
                    ?>
                    <li><?php echo $item; ?></li>
                    <?php
                        endforeach
                    ?>
                </ul>
            </div>
            
        </div>
    </div>
</body>
</html> 
