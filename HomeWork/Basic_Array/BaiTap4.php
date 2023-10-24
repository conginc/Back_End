<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>BaiTap4</title>
    <style>
        #submit{
            margin-top: 10px;
            
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <h1 class="text-center">Thuc don</h1>
        <form action="menu.php"method="POST">
            <div class="row">
                <div class="col-md-4">
                    <h3>Mon khai vi</h3>
                    <select name="khaiVi[]" id="khaivi" multiple class="form-control">
                        <option value="Goi ngo sen">Goi ngo sen</option>
                        <option value="Salat ca ngu">Salat ca ngu</option>
                        <option value="Bo tron rau thom">Bo tron rau thom</option>
                        <option value="Thit nguoi">Thit nguoi</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <h3>Mon chinh</h3>
                    <select name="monChinh[]" id="monchinh" multiple class="form-control">
                        <option value="Bo ham">Bo ham</option>
                        <option value="Ca chem sot ca">Ca chem sot ca</option>
                        <option value="Tom rang muoi">Tom rang muoi</option>
                        <option value="Cua sot me">Cua sot me</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <h3>Mon trang mieng</h3>
                    <select name="monTrangMieng[]" id="montrangmieng" multiple class="form-control">
                        <option value="Che hat sen">Che hat sen</option>
                        <option value="Banh flan">Banh flan</option>
                        <option value="Rau cau">Rau cau</option>
                        <option value="Nho">Nho</option>               
                    </select>
                </div>
            </div>
            <button id="submit" type="submit" class="rounded border border-info">Submit</button>
        </form>
    </div>
    <?php

    ?>
</body>
</html>