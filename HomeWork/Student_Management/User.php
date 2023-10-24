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
        class User {
            private $username;
            private $password;
            private $firstName;
            private $lastName;
        
            public function __construct($username, $password, $firstName, $lastName) {
                $this->username = $username;
                $this->password = password_hash($password, PASSWORD_DEFAULT);
                $this->firstName = $firstName;
                $this->lastName = $lastName;
            }
        
            public function getFullname() {
                return $this->firstName . ' ' . $this->lastName;
            }
        
            public function getUsername() {
                return $this->username;
            }
        
            public function login($enteredUsername, $enteredPassword) {
                if ($this->username === $enteredUsername && password_verify($enteredPassword, $this->password)) {
                    return true;
                }
                return false;
            }
        }
        
        
    ?>
</body>
</html>