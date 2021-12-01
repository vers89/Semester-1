<?php 

$k=3;
$h=3;

for ($i=1; $i<=10; $i++){
    echo "<br>";
    for($j=$k; $j<=$h; $j++){
        echo " $j";
    }
    $k+=2;
    $h+=3;
}

