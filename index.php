<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body>
    <?php include "navbar.php"; ?>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="alert alert-secondary" role="alert">
                    <h2><strong>Sistem Informasi COVID-19 </strong></h2>
                </div>
            </div>
        </div>
    </div>
    <!--kolom nama-nama provinsi -->
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="alert alert-secondary alert-secondary  role=" alert">
                    <h5>Berikut adalah Provinsi yang menjadi pemantauan perkembangan Covid-19</h5>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-primary">
                    <div class="card-body">
                        <ol>
                            <li>ACEH</li>
                            <li>BALI</li>
                            <li>BANTEN</li>
                            <li>BANGKA BELITUNG</li>
                            <li>BENGKULU</li>
                            <li>YOGYAKARTA</li>
                            <li>JAKARTA</li>
                            <li>JAMBI</li>
                            <li>JAWA BARAT</li>
                            <li>JAWA TENGAH</li>
                            <li>JAWA TIMUR</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-primary">
                    <div class="card-body">
                        <ol>
                            <li>KALIMANTAN BARAT</li>
                            <li>KALIMANTAN TIMUR</li>
                            <li>KALIMANTAN TENGAH</li>
                            <li>KALIMANTAN SELATAN</li>
                            <li>KALIMANTAN UTARA</li>
                            <li>KEPULAUAN RIAU</li>
                            <li>NUSA TENGGARA BARAT</li>
                            <li>SUMATERA SELATAN</li>
                            <li>SUMATERA BARAT</li>
                            <li>SULAWESI UTARA</li>
                            <li>SUMATERA UTARA</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-primary">
                    <div class="card-body">
                        <ol>
                            <li>SULAWESI TENGGARA</li>
                            <li>SULAWESI SELATAN</li>
                            <li>SULAWESI TENGAH</li>
                            <li>RIAU</li>
                            <li>MALUKU UTARA</li>
                            <li>MALUKU</li>
                            <li>PAPUA BARAT</li>
                            <li>PAPUA</li>
                            <li>SULAWESI BARAT</li>
                            <li>NUSA TENGGARA TIMUR</li>
                            <li>GORONTALO</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>