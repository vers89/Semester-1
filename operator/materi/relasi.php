<?php

$a = 6;
$b = 2;

// menggunakan operator relasi lebih besar
$c = $a > $b;
echo "$a > $b : $c";
echo "<hr>";

// mrnggunakan operator relasi lebih kecil//
$c = $a <= $b;
echo "$a < $b : $c ";
echo "<hr>";

// menggunakan operator relasi lebih sama besar dengan
$c = $a == $b;
echo "$a == $b : $c";
echo "<hr>";

// menggunakan operator relasi lebih tidak sama dengan
$c = $a != $b;
echo "$a ! $b = $c";
echo "<hr>";

// menggunakan operator relasi lebih besar sama dengan
$c = $a >= $b;
echo "$a >= $b = $c ";
echo "<hr>";
//  menggunakan operator relasi lebih kecil sama dengan
$c = $a <= $b;
echo "$a <= $b = $c";
echo "<hr>";

// contoh pembuatan kondisi dalam percabangan
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$total_belanja = 150000;

if ($total_belanja > 100000) {
    echo "Anda dapat hadiah!";
}
