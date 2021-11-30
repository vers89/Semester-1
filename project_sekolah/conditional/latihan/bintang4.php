<?php

$jumlah=5;

for($a=1; $a<=$jumlah; $a++){
    for($b=$jumlah; $b>=$a; $b-=1){
        print('&nbsp');
    }
    for($c=1; $c<=$a; $c++){
        echo ' * ';
    }
    echo "<br/>";
}