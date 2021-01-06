<?php

include("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM RambuBiru"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/slider.css">
    <link rel="stylesheet" href="../assets/css/main.css" />
    <title>Dashboard</title>
    <style type="text/css">
        .card-custom {
            height: 100% !important;
            width: 100% !important;
            border: 5px solid black;
            border-radius: 30px;
        }

        .card-judul {
            font-weight: 700;
        }

        .nav-link {
            color: #09122c !important;
            text-transform: uppercase;
            font-weight: bold;
            font-size: 20px;
            margin: 0px 50px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="height: 80px;">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="../assets/logo.png" alt="" width="80px" style="margin-left: -90px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link" href="../Home.html" style="margin-right: -125px;">Home</a>
                </div>
            </div>
        </div>
    </nav>
    <section class="side">
        <div class="sidebar">
            <div class="upper-sidebar">
                <h3 class="judul" style="margin-top: 100px;">Rambu Lantas</h3>

            </div>

            <section class="isi-nav">
                <div class="navigation">
                    <a href="RambuLarangan.php" style="color: red; font-weight: bold; text-decoration: none;">Rambu
                        Larangan</a>
                    <a href="Rambu1.php" style="color: blue; font-weight: bold; text-decoration: none;">Rambu
                        Perintah</a>
                </div>
            </section>
        </div>
        <section class="content">
            <div class="container" style="margin-bottom: 325px;">
                <h2 align="center" style="margin-top: 50px;">Rambu Perintah</h2>
                <div class="row" id="load_data">
                    <?php
                    include 'konfig.php';
                    $query = "SELECT * FROM RambuBiru ORDER BY id_RB ASC";
                    $dewan1 = $db1->prepare($query);
                    $dewan1->execute();
                    $res1 = $dewan1->get_result();
                    while ($row = $res1->fetch_assoc()) {
                        $id = $row["id_RB"];
                        $foto = $row["name"];
                        $text = $row["nama_gambar"];
                        $deskripsi = $row["Deskripsi"];
                        if (strlen($eskripsi) > 100) {
                            $deskripsi = substr($deskripsi, 0, 100) . "...";
                        }

                    ?>
                        <div class="col-sm-3 mb-3" style="margin-bottom: 500px;">
                            <div class="card-custom card">
                                <img src="../admin/file/<?php echo $foto; ?>" class="card-img-top" alt="gambar">
                                <div class="card-body">
                                    <h5 class="card-judul card-text"><?php echo $text; ?></h5>
                                    <p class="card-text"><?php echo $deskripsi; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>
            <div class="keterangan">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <h3 class="keterangan-isi">Marilah bersama-sama menjaga ketertiban berlalu lintas dan keamanan berkendara.</h3>
                        </div>
                        <div class="carousel-item">
                            <h3 class="keterangan-isi">Kecelakan lalu lintas di jalan raya adalah penyebab kematian tertinggi kedua setelah penyakit jantung di Indonesia saat ini. Marilah kita waspada ketika sedang menggunakan jalan raya.</h3>
                        </div>
                        <div class="carousel-item">
                            <h3 class="keterangan-isi">Mari patuhilah rambu lalu lintas, dan selalu ingat bahwa perilaku kita di jalan raya ikut mempengaruhi kehidupan orang lain termasuk keluarga tercinta yang sedang menunggu dirumah.</h3>
                        </div>
                        <div class="carousel-item">
                            <h3 class="keterangan-isi">Mari berhati-hati dalam berkendara agar tidak terjadi kecelakaan lalu lintas yang akan merugikan diri sendiri dan orang lain yang sekitarnya.</h3>
                        </div>
                        <div class="carousel-item">
                            <h3 class="keterangan-isi">Mari taati peraturan di jalan raya yang telah dibuat terutama rambu lalulintas yang berwarna merah dan biru. Jangan melanggarnya ya, karena hal ini dapat menyelamatkan kamu dan juga orang lain.</h3>
                        </div>
                        <div class="carousel-item">
                            <h3 class="keterangan-isi">Pengendara yang sering melanggar rambu - rambu lalu lintas dan ugal - ugalan dalam berkendara dapat mengakibatkan keselamatan dirinya dan pengguna jalan lain terancam.</h3>
                        </div>
                        <div class="carousel-item">
                            <h3 class="keterangan-isi">Kecelakaan lalu lintas dapat terjadi karena tidak mematuhi peraturan lalu lintas yang telah dibuat.</h3>
                        </div>
                        <div class="carousel-item">
                            <h3 class="keterangan-isi">Kecelakaan bisa dicegah dengan kita berhati-hati ketika berkendara, jangan menerobos lampu merah serta mentaati rambu - rambu lalulintas.</h3>
                        </div>
                    </div>
                    </a>
                </div>
            </div>


        </section>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
        </script>
</body>

</html>