<?php

// Operator "and" - True nếu cả $x và $y đều đúng
$x = 100;  
$y = 50;

if ($x == 100 and $y == 50) {
    echo "True nếu cả \$x và \$y đều đúng" . '<br>';
}

// Operator "or" - True nếu $x hoặc $y là true
$x = 100;  
$y = 50;

if ($x == 100 or $y == 80) {
    echo "True nếu \$x hoặc \$y là true" . '<br>';
}

// Operator "xor" - True nếu $x hoặc $y là đúng, nhưng không phải cả hai
$x = 100;  
$y = 50;

if ($x == 100 xor $y == 80) {
    echo "True nếu \$x hoặc \$y là đúng, nhưng không phải cả hai" . '<br>';
}

// Operator "&&" - True nếu cả $x và $y đều đúng
$x = 100;  
$y = 50;

if ($x == 100 && $y == 50) {
    echo "True nếu cả \$x và \$y đều đúng" . '<br>';
}

// Operator "||" - True nếu cả $x và $y đều đúng
$x = 100;  
$y = 50;

if ($x == 100 || $y == 80) {
    echo "True nếu \$x hoặc \$y là true" . '<br>';
}

// Operator "!" - True nếu $x không đúng
$x = 100;  

if ($x !== 90) {
    echo "True nếu \$x không đúng";
}