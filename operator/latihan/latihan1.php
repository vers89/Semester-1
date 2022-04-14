<?php
// variable gaji kotor
$gaji_kotor = 4500000;

echo "Gaji kotor = Rp. $gaji_kotor";
echo "<hr>";

// variable pajak
$pajak = 0.025;
echo "Pajak = 2,5%";
echo "<hr>";

// menghitung pajak
$hasil_pajak = $gaji_kotor * $pajak;
echo "pajak 2,5% = Rp.$hasil_pajak";
echo "<hr>";

// hasil dikurangi pajak
$hasil1 = $gaji_kotor - $hasil_pajak;
echo "Gaji kotor dikurangi pajak = Rp. $hasil1";
echo "<hr>";

// variable potongan bpjs
$potongan_bpjs = 200000;
echo "Potongan BPJS = Rp. $potongan_bpjs";
echo "<hr>";

// hasil dikurangi BPJS
$hasil2 = $hasil1 - $potongan_bpjs;
echo "Gaji kotor dikurangi potongan BPJS = Rp. $hasil2";
echo "<hr>";

// variable untuk infaq
$infaq = 50000;
echo "Infag setiap bulannya = Rp. $infaq";
echo "<hr>";

// hasil dikurangi infaq
$hasil3 = $hasil2 - $infaq;
echo "Gaji kotor dikurangi infaq = Rp. $hasil3";
echo "<hr>";

// variable untuk uang transport
$transport = 10000 * 24;
echo "Uang transport tiap 24 hari = Rp. $transport";
echo "<hr>";

// hasil ditambah uang transport
$hasil3 += $transport;
echo "Jadi, hasil yang diterima Haddad setelah mendapat
potongan dan bonus treanport adalah RP. $hasil3";
echo "<hr>";
