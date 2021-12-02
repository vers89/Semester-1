<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid py-5 bg-dark bg-opacity-1 text-white"> 
        <div class="container">
        <center><h2> Isi Data Dibawah Ini</h2></center>
        <br>
        <br>
            <div class="offset-lg-2 col-lg-8">
                <form action="proses2.php" method="GET">
                        <div class="mb-3">
                            <div class="row">
                                <div class="class-lg-6">
                                    <h6> <label for="nama" >Nama <input type="text" name="nama" id="nama1" class= "form-control" placeholder="Masukkan nama ..."> </label></h6>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="row">
                                <div class="class-lg-6">
                                    <h6> <label for="nama" class="form-label"> Matematika 
                                    <input type="number" class="form-control form-control-sm" class= "form-control" name="mtk" min="0" max="100"> </label></h6>
                                </div>
                                <div class="class-lg-6">
                                    <h6> <label for="nama" class="form-label"> Bahasa Indonesia 
                                    <input type="number" class="form-control form-control-sm" class= "form-control" name="bin" min="0" max="100"> </label></h6>
                                </div>
                                <div class="class-lg-6">
                                    <h6> <label for="nama" class="form-label"> Bahasa Inggris 
                                    <input type="number" class="form-control form-control-sm" class= "form-control" name="bing" min="0" max="100"> </label></h6>
                                </div>
                                <div class="class-lg-6">
                                    <h6> <label for="nama" class="form-label"> kejuruan
                                    <input type="number" class="form-control form-control-sm" class= "form-control" name="kejuruan" min="0" max="100"> </label></h6>
                                </div>
                            </div>
                        </div>

                            <button class="btn btn-primary" type="submit" name="simpan" >Simpan</button>
                            <button class="btn btn-secondary" type="reset" name="reset">Reset</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>