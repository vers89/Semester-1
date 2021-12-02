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



// $siswa = [
//     ["nama"=>"Virgi","jk"=>"L","umur"=>17],
//     ["nama"=>"Anjay","jk"=>"L","umur"=>17],
//     ["nama"=>"Sukro","jk"=>"L","umur"=>17],   
//     ["nama"=>"Agus","jk"=>"L","umur"=>17],
//     ["nama"=>"Gugus","jk"=>"L","umur"=>17]
// ];

// foreach ($siswa as $value) {
//     echo "Nama : ". $value['nama']. "<br>";
//     echo "Jenis Kelamin : ". $value['jk'] . "<br>";
//     echo "Umur : ". $value['umur'] . "<br>";
//     echo "<hr>";
// }

$mobil =[
    ["merk"=>"Honda","warna" =>"Merah"],
    ["merk"=>"Toyota","warna" =>"Hitam"],
    ["merk"=>"Esemka","warna" =>"Transparan"],
    ["merk"=>"Esempe","warna" =>"Biru"]
];

foreach($mobil as $mbem){
    echo "Merk : ". $mbem["merk"],"<br>";
    echo "Warna : ". $mbem["warna"],"<br>";
    echo "<br>";
}

