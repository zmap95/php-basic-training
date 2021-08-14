<?php

$firstNumber = 8;
$secondNumber = 4;

// So sánh bằng
$compare = $firstNumber == $secondNumber;
echo 'Giá trị so sánh của hai số là ' . $compare . PHP_EOL . PHP_EOL; // Kết quả false vì 8 lớn hơn 4

$firstNumber = '4';
$secondNumber = 4;

// So sánh bằng kèm kiểu dữ liệu
$compare = $firstNumber === $secondNumber;
echo 'Giá trị so sánh của hai số là ' . $compare . PHP_EOL . PHP_EOL; // Kết quả false vì $firstNumber là kiểu string còn $secondNumber là kiển int

$firstNumber = 8;
$secondNumber = 4;

// So sánh khác
$compare = $firstNumber != $secondNumber;
echo 'Giá trị so sánh của hai số là ' . $compare . PHP_EOL . PHP_EOL; // Kết quả true vì $firstNumber và $secondNumber là 2 số khác nhau

$firstNumber = '4';
$secondNumber = 4;

// So sánh khác kèm kiểu dữ liệu
$compare = $firstNumber !== $secondNumber;
echo 'Giá trị so sánh của hai số là ' . $compare . PHP_EOL . PHP_EOL; // Kết quả true vì $firstNumber là kiểu string còn $secondNumber là kiểu int

$firstNumber = 8;
$secondNumber = 4;

// So sánh không bằng
$compare = $firstNumber <> $secondNumber;
echo 'Giá trị so sánh của hai số là ' . $compare . PHP_EOL . PHP_EOL; // Kết quả true vì 8 khác 4

$firstNumber = 8;
$secondNumber = 4;

// So sánh lớn hơn
$compare = $firstNumber > $secondNumber;
echo 'Giá trị so sánh của hai số là ' . $compare . PHP_EOL . PHP_EOL; // Kết quả true vì 8 lớn hơn 4


$firstNumber = 8;
$secondNumber = 4;

// So sánh nhỏ hơn
$compare = $firstNumber < $secondNumber;
echo 'Giá trị so sánh của hai số là ' . $compare . PHP_EOL . PHP_EOL; // Kết quả false vì 8 lớn hơn 4
