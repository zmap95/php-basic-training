<?php

$hour = date("H");

if ($hour >= 0 && $hour <= 11) {
    echo "Good morning!";
} elseif ($hour > 11 && $hour <= 18) {
    echo "Good afternoon!";
} else {
    echo "Good night!";
}

