<?php
// Tạo biến với các kiểu dữ liệu khác nhau
$stringVar = "Hello, world!";
$intVar = 42;
$floatVar = 3.14;
$boolVar = true;

// Tạo hằng số PI
define("PI", 3.14);

// In ra tên và giá trị của các biến và hằng số
echo "String Variable: " . $stringVar . "<br>";
echo "Integer Variable: " . $intVar . "<br>";
echo "Float Variable: " . $floatVar . "<br>";
echo "Boolean Variable: " . ($boolVar ? 'true' : 'false') . "<br>";

echo "PI Constant: " . PI . "<br>";
?>
