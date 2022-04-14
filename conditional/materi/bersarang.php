<?php

$umur =18;
$menikah = false;

if ($umur >= 18) {
    echo "Selamat Datang";
    if ($menikah){
        echo "Selamat Datang Pak";
    }
}else {
    echo "Anda Belum Cukup Umur";
}