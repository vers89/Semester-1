<?php

// Array Petani kode
$books = [
    "Panduan Belajar PHP untuk Pemula",
    "Membangun Aplikasi Web dengan PHP",
    "Tutorial PHP dan MySQL",
    "Membuat Chat Bot dengan PHP"
];

echo "<h5>Judul Buku PHP:</h5>";
echo "<ol>";
foreach($books as $buku){
    echo "<li>$buku</li>";
}
echo "</ol>";

echo "<br><br>";

// Contoh Array 1
$siswa = [
    ["nama"=>"Virgi","jk"=>"L","umur"=>17],
    ["nama"=>"Anjay","jk"=>"L","umur"=>17],
    ["nama"=>"Sukro","jk"=>"L","umur"=>17],   
    ["nama"=>"Agus","jk"=>"L","umur"=>17],
    ["nama"=>"Gugus","jk"=>"L","umur"=>17]
];

foreach ($siswa as $value) {
    echo "Nama : ". $value['nama']. "<br>";
    echo "Jenis Kelamin : ". $value['jk'] . "<br>";
    echo "Umur : ". $value['umur'] . "<br>";
    echo "<hr>";
}

echo "<br><br>";
// Contoh Array 2
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

echo "<br><br>";
// Buat Sendiri
$judul = [
    ["Judul Buku"=>"Laskar", "Sampul"=>"Biru", "Taun Terbit"=>2004],
    ["Judul Buku"=>"pelangi", "Sampul"=>"merah", "Taun Terbit"=>2005],
    ["Judul Buku"=>"marah", "Sampul"=>"kuning", "Taun Terbit"=>2006],
    ["Judul Buku"=>"aku", "Sampul"=>"hijau", "Taun Terbit"=>2007]
];

foreach($judul as $buku){
    echo "Judul Buku : ". $buku['Judul Buku'],"<br>";
    echo "Warna Sampul : ". $buku['Sampul'],"<br>";
    echo "Tahun Terbit : ". $buku['Taun Terbit'],"<br>";

}