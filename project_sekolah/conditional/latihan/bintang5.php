<?php

for($i=5; $i>=1; $i--){
    for($j=5; $j>=$i; $j--){
        echo "&nbsp";
    }
    for($g=1; $g<=$i; $g++){
        echo " * ";
    }
    echo "<br>";
}