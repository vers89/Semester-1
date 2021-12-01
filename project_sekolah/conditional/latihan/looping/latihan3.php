<?php
$nama = "ratna";
$jabatan = "sekretaris";

echo "<h3> ======================== Gaji PT.Sonntoloyo ===================== </h3>";
echo "<br>";
echo "=======================================================================";

if($nama == "budi"){
    if ($jabatan == "manager" ){
        echo "<br>";
        echo "<br>";
        echo " <center> <h4> Gaji Budi Sebagai Seorang Manager <h4> </center><br>";
        echo "<br>";
        echo "<br>";

        $gaji_manager = 4500000;
        $potongan_bpjs = 150000;
        
        $potongan_bpjs2 = $potongan_bpjs * 5 ;
        $hasil1= $gaji_manager - $potongan_bpjs2;

        echo "Gaji Kotor Budi Rp. $gaji_manager <br>";
        echo "Dikurang potongan BPJS dengan 1 istri dan 3 anaknya Rp. $potongan_bpjs2 <br>";
        echo "= Rp. $hasil1";
        echo "<hr>";

        $potongan_pajak = 0.025;

        $hasil_pajak = $gaji_manager * $potongan_pajak;
        $hasil2 = $hasil1 - $hasil_pajak;

        echo "Gaji Kotor Budi Rp. $hasil1 <br>";
        echo "Dikurang potongan pajak 2.5% Rp. $hasil_pajak<br>";
        echo "= Rp. $hasil2";
        echo "<hr>";

        $transport = 50000 * 24;
        $hasil3 = $hasil2 + $transport;
        
        echo "Gaji Kotor Budi Rp. $hasil2 <br>";
        echo "Ditambah uang transport Rp. $transport <br>";
        echo "= Rp. $hasil3";
        echo "<hr>";

        $tunjangan = 0.1;
        $hasil_tunjangan = $gaji_manager * $tunjangan; 
        $hasil4 = $hasil3 + $hasil_tunjangan;

        echo "Gaji Kotor Budi Rp. $hasil3 <br>";
        echo "Ditambah tunjangan 10% Rp $hasil_tunjangan <br>";
        echo "= Rp. $hasil4";
        echo "<hr>";
        
        $lembur = 45;
        switch($lembur){
            case 45 :
                $hasil_lembur= $lembur * 50000;
                $hasil5 = $hasil4 + $hasil_lembur;
                echo "Gaji Bersih Budi Rp. $hasil4 <br>";
                echo "Ditambah lembur Rp $hasil_lembur <br>";
                echo "= Rp. $hasil5";
                echo "<hr>";
                break;
        }
        echo "Jadi, gaji bersih Budi sebagai seorang manager adalah Rp. $hasil5";
    }
      
}
else if ($nama == "ratna" ){
    if ($jabatan == "sekretaris" ){
        echo "<br>";
        echo "<br>";
        echo " <center> <h4> Gaji Ratna Sebagai Seorang Sekretaris <h4> </center><br>";
        echo "<br>";
        echo "<br>";

        $gaji_sekretaris = 3500000;
        $potongan_bpjs = 150000;

        $hasil1 = $gaji_sekretaris - $potongan_bpjs;

        echo "Gaji Kotor Ratna Rp. $hasil1 <br>";
        echo "Dikurang potongan BPJS Rp. $potongan_bpjs <br>";
        echo "= Rp. $hasil1";
        echo "<hr>";

        $potongan_pajak = 0.025;

        $hasil_pajak = $gaji_sekretaris * $potongan_pajak;
        $hasil2 = $hasil1 - $hasil_pajak;

        echo "Gaji Kotor Ratna Rp. $hasil1 <br>";
        echo "Dikurang potongan pajak 2.5% Rp. $hasil_pajak<br>";
        echo "= Rp. $hasil2";
        echo "<hr>";

        $transport = 35000 * 24;
        $hasil3 = $hasil2 + $transport;
        
        echo "Gaji Kotor Ratna Rp. $hasil2 <br>";
        echo "Ditambah uang transport Rp. $transport <br>";
        echo "= Rp. $hasil3";
        echo "<hr>";

        $tunjangan = 0.1;
        $hasil_tunjangan = $gaji_sekretaris * $tunjangan; 
        $hasil4 = $hasil3 + $hasil_tunjangan;

        echo "Gaji Kotor Budi Rp. $hasil3 <br>";
        echo "Ditambah tunjangan 10% Rp $hasil_tunjangan <br>";
        echo "= Rp. $hasil4";
        echo "<hr>";
        
        $lembur = 35;
        switch($lembur){
            case 35 :
                $hasil_lembur= $lembur * 45000;
                $hasil5 = $hasil4 + $hasil_lembur;
                echo "Gaji Bersih Ratna Rp. $hasil4 <br>";
                echo "Ditambah lembur Rp $hasil_lembur <br>";
                echo "= Rp. $hasil5";
                echo "<hr>";
                break;
        }
        echo "Jadi, gaji bersih Ratna sebagai seorang sekretaris adalah Rp. $hasil5";
    }
}
