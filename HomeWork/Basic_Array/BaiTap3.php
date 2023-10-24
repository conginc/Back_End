<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form_container {
            border: 2px solid #000;
            /* Đổi màu và độ dày của khung theo nhu cầu */
            padding: 20px;
            /* Thêm khoảng cách giữa nội dung và khung */
            width: 500px;
            /* Đổi kích thước của khung theo nhu cầu */
        }

        #name,
        #email {
            margin: 5px 5px 5px 30px;
        }

        #website {
            margin: 5px 5px 5px 18px;
        }

        #comment {
            margin: 5px 5px 5px 5px;
        }

        #gender {
            margin: 5px 5px 5px 15px;
        }

        #submit {
            margin: 5px 5px 5px 5px;
        }
    </style>
</head>

<body>
    <?php
    // Khởi tạo các biến để lưu dữ liệu từ biểu mẫu
    $name = $email = $website = $comment = $gender = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Lấy dữ liệu từ biểu mẫu sau khi người dùng nhấn nút Gửi
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $website = htmlspecialchars($_POST['website']);
        $comment = htmlspecialchars($_POST['comment']);
        $gender = htmlspecialchars($_POST['gender']);
    }

    ?>
    <container>
        <div class="form_container">
            <form action="" method="POST">
                <label for="name">Name: </label>
                <input type="text" name="name" id="name">
                <br>
                <label for="email">Email: </label>
                <input type="text" name="email" id="email">
                <br>
                <label for="website">Website: </label>
                <input type="text" name="website" id="website">
                <br>
                <label for="comment">Comment: </label>
                <textarea rows="5" cols="50" name="comment" id="comment"></textarea>
                <br>
                <label for="gender">Gender: </label>
                <input type="radio" name="gender" value="female"> Female
                <input type="radio" name="gender" value="male"> Male
                <br>
                <input type="submit" id="submit" value="Submit">
            </form>
        </div>

    </container>
    <?php

    // Hiển thị thông tin người dùng đã nhập
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p>Name: $name</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Website: $website</p>";
        echo "<p>Comment: $comment</p>";
        echo "<p>Gender: $gender</p>";
    }
    ?>
</body>

</html>