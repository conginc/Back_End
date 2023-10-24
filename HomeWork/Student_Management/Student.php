<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Student extends User {
            private $gpa;
        
            public function __construct($username, $password, $firstName, $lastName, $gpa) {
                parent::__construct($username, $password, $firstName, $lastName);
                $this->gpa = $gpa;
            }
        
            public function rank() {
                if ($this->gpa < 5) {
                    return "Yếu";
                } elseif ($this->gpa >= 5 && $this->gpa < 7) {
                    return "Trung bình";
                } elseif ($this->gpa >= 7 && $this->gpa < 8) {
                    return "Khá";
                } elseif ($this->gpa >= 8) {
                    return "Giỏi";
                }
            }
        
            public function getGpa() {
                return $this->gpa;
            }
        }
        
        
    ?>
</body>
</html>