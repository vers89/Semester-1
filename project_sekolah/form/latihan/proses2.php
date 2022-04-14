<?php

if(isset($_GET['simpan'])){
    $name = $_GET['nama'];
    $mtk = $_GET['mtk'];
    $bin = $_GET['bin'];
    $bing = $_GET['bing'];
    $kejuruan = $_GET['kejuruan'];

    $keseluruhan = $mtk + $bin + $bing + $kejuruan;
    $rata = $keseluruhan /4;

    if($keseluruhan <= 340 || $rata <= 85 ){

        $h = "Maaf Anda Tidak Lulus";
    }
    else {
        $h = " Selamat Anda Lulus";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <fieldset>
        <center>
            <legend>
                <h2>Hasil</h2>
            </legend>
        </center>
        <br>
        <table>
            <tr>
                <th style="text-align: left;">Nama</th>
                <th>:</th>
                <th style="text-align: left;"> <?php echo $name ?> </th>
            </tr>
            <tr>
                <th style="text-align: left;">Nilai Matematika</th>
                <th>:</th>
                <th style="text-align: left;"> <?php echo $mtk ?> </th>
            </tr>
            <tr>
                <th style="text-align: left;">Nilai Bahasa Indonesia</th>
                <th>:</th>
                <th style="text-align: left;"> <?php echo $bin ?> </th>
            </tr>
            <tr>
                <th style="text-align: left;">Nilai Bahasa Inggris</th>
                <th>:</th>
                <th style="text-align: left;"> <?php echo $bing ?> </th>
            </tr>
            <tr>
                <th style="text-align: left;">Nilai Kejuruan</th>
                <th>:</th>
                <th style="text-align: left;"> <?php echo $kejuruan ?> </th>
            </tr>
            <tr>
                <th style="text-align: left;">Nilai Keseluruhan Anda</th>
                <th>:</th>
                <th style="text-align: left;"> <?php echo $keseluruhan ?> </th>
            </tr>
            <tr>
                <th style="text-align: left;">Nilai Rata - Rata Anda</th>
                <th>:</th>
                <th style="text-align: left;"> <?php echo $rata ?> </th>
            </tr>
            <tr>
                <th style="text-align: left;">Kepada </th>
                <th> : </th>
                <th style="text-align: left;"> <?php echo $name ?></th>
                <th style="text-align: left;"> <?php echo $h ?></th>
            </tr>
        </table>
    </fieldset>
</body>

</html>