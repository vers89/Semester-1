<?php
//penampungan Data
if(isset($_POST['simpan'])){
    // text field
    $name = $_POST['nama'];
    $email= $_POST['email'];
    
    // radio
    $jk = $_POST['jk'];

    // select
    $agama = $_POST['agama'];

    // number
    $tb = $_POST['tb'];
    $bb = $_POST['bb'];
    $nomor = $_POST['nomor'];

    //checkbox
    if(isset($_POST['Sehat'])){
        $Sehat = "ada";
    }else{
        $Sehat = "Tidak ada";
    }
    if(isset($_POST['kk'])){
        $kk = "ada";
    }
    if(isset($_POST['skl'])){
        $skl = "ada";
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
    <center><h1>Pendaftaran Peserta Didik Baru</h1></center>
    Nama Lengkap : <b> <?php echo $nama; ?></b> <br>

    Email : <b> <?php echo $email; ?></b> <br>

    Jenis Kelamin : <b> <?php echo $jk; ?></b> <br>

    Agama : <b> <?php echo $agama ?></b> <br>

    Tinggi Badan : <b> <?php echo $tb ?></b> <br>

    Berat Badan : <b> <?php echo $bb ?></b> <br>

    Kelengkapan Persyaratan : 
    <li>Surat Sehat : <b> <?php echo $Sehat; ?> </b></li><br>
    <li>Kartu Keluarga : <b> <?php echo $kk; ?> </b></li><br>
    <li>Surat Keteranga Lulus : <b> <?php echo $skl; ?> </b></li><br>

    Nomor Telepon : <b> <?php echo $nomor ?></b> <br>
</body>
</html>

<?php } ?>