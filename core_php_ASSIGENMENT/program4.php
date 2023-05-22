<?php
$limit = 10; // Change this value to adjust the number of Fibonacci numbers to print

$first = 0;
$second = 1;

echo "Fibonacci Series: ";

echo $first . ", " . $second;

for ($i = 2; $i < $limit; $i++) {
    $next = $first + $second;
    echo ", " . $next;
    $first = $second;
    $second = $next;
}
?>
