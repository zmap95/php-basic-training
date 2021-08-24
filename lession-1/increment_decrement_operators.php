<?php

// Thêm đơn vị của $x lên 1 và trả về $x
$x = 10;  
echo "Giá trị của ++\$x là: " . ++$x;
echo "<br>";

// Trả về giá trị của biến $x và tăng giá trị của $x lên 1
$x = 10;  
echo "Giá trị của \$x++ là: " . $x++;
echo "<br>";
echo "Giá trị của \$x là: " . $x;
echo "<br>";

// Giảm giá trị của $x xuống 1 và trả về $x
$x = 10;  
echo "Giá trị của --\$x là: " . --$x;
echo "<br>";

// Trả về giá trị của biến $x và giảm giá trị của $x xuống 1
$x = 10;  
echo "Giá trị của \$x-- là: " . $x--;
echo "<br>";
echo "Giá trị của \$x là: " . $x;