<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="img/1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h2>Mari bangun Indonesia Kuat</h2>
            <p>Bersama TNI/Polri</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="img/2.jpeg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h2>Mari bangun Indonesia Kuat</h2>
            <p>Bersama TNI/Polri</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="img/3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h2>Mari bangun Indonesia Kuat</h2>
            <p>Bersama TNI/Polri</p>
        </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
       
    <div class="container-fluid py-5 bg-dark bg-opacity-1 text-white"> 
        <div class="container">
        <center><h2>Syarat Masuk  TNI/Polri</h2></center>
        <br>
        <br>
            <div class="offset-lg-2 col-lg-8">
                <form action="proses1.php" method="POST">
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
                                    <h6> <label for="nama" class="form-label"> Tinggi Badan <input type="number" class="form-control form-control-sm" class= "form-control" name="tb" min="100" max="200"> </label></h6>
                                </div>
                                <div class="class-lg-6">
                                    <h6> <label for="nama" class="form-label">Berat Badan <input type="number" class="form-control form-control-sm" class= "form-control" name="bb" min="0" max="100"> </label></h6>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="row">
                                <div class="class-lg-6">
                                    <h6> <label for="nama" class="form-label">Jenis Kelamin 
                                        <input type="radio" name="jk"  value="Laki - Laki">Laki - Laki
                                        <input type="radio" name="jk"  value="Perempuan">Perempuan </label>
                                    </h6>
                                </div>
                            </div>
                        </div>

                            <button class="btn btn-primary" type="submit" name="simpan" >Daftar</button>
                            <button class="btn btn-secondary" type="reset" name="reset">Reset</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
