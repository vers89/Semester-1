<?php

if(isset($_POST ['simpan'])){
    $name = $_POST ['nama'];
    $tb = $_POST ['tb'];
    $bb = $_POST ['bb'];
    $jk = $_POST ['jk'];
    
    if($jk == "Laki - Laki"){

        if($tb < 170 || $bb > 90){
            $a = " Mohon Maaf Tidak Diterima";
        }
        else {
            $a = " Selamat Anda Diterima";
        }
    }
    else {

        if($tt < 160 || $bb > 75){
            $a = " Mohon Maaf Tidak Diterima";
        }
        else {
            $a = " Selamat Anda Diterima";
        }
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
        <legend><h2>Hasil Pendaftaran TNI/Polri</h2></legend>
        Nama Lengkap : <b> <?php echo $name; ?></b> <br>
        Jenis Kelamin : <b> <?php echo $jk; ?></b> <br>
        Tinggi Badan : <b> <?php echo $tb; ?></b> <br>
        Berat Badan : <b> <?php echo $bb; ?></b> <br>
        Kepada : <b> <?php echo $name,$a ?> </b>
    </fieldset>
    
</body>
</html>

