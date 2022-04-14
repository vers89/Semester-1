<?php

$a = true;
$b = false;

// variable $c akan bernilai false
$c = $a && $b;
printf("%b && %b = %b", $a, $b, $c);
echo "<hr>";

// varible $c akan bernilai true
$c = $a || $b;
printf("%b || %b = %b", $a, $b, $c);
echo "<hr>";

// varible $c akan bernilai false;
$c = !$a;
printf("!%b = %b", $a, $c);
echo "<hr>";
