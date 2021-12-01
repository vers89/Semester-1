<?php

// $books = [
//     "Panduan Belajar PHP untuk Pemula",
//     "Membangun Aplikasi Web dengan PHP",
//     "Tutorial PHP dan MySQL",
//     "Membuat Chat Bot dengan PHP"
// ];

// echo "<h5>Judul Buku PHP:</h5>";
// echo "<ul>";
// foreach($books as $buku){
//     echo "<li>$buku</li>";
// }
// echo "</ul>";



$siswa = [
    ["nama"=>"Virgi","jk"=>"L","umur"=>17],
    ["nama"=>"Virgi","jk"=>"L","umur"=>17],
    ["nama"=>"Virgi","jk"=>"L","umur"=>17],   
    ["nama"=>"Virgi","jk"=>"L","umur"=>17],
    ["nama"=>"Virgi","jk"=>"L","umur"=>17]
];

foreach ($siswa as $value) {
    echo "Nama : " . $value['nama']. "<br>";
    echo "Jenis Kelamin : ". $value['jk'] . "<br>";
    echo "Umur : ". $value['umur'] . "<br>";
    echo "<hr>";
}