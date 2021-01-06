<?php

include("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM gambar"); ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/dashboard.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style type="text/css">
        .logo {
            width: 130px !important;
            position: fixed;
            top: 30px;
            left: 10px;
        }

        .logo2 {
            width: 130px !important;
            position: fixed;
            top: 80px;
            left: 150px;
        }
    </style>
    <title>Admin Page</title>
</head>

<body>
    <section class="side">
        <div class="sidebar">
            <div class="upper-sidebar">
                <img class="logo" src="../../assets/logo.png" alt="">
                <h3 class="logo2">ADMIN</h3>
            </div>
            <section class="isi-nav">
                <div class="pilih-rambu">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn text-left" type="button" data-toggle="collapse" data-target="#collapseOne">
                                        Tambah Rambu
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse show">
                                <div class="card-body">
                                    <a href="../Tambah/rambubiru.php">Rambu Biru</a>
                                </div>
                                <div class="card-body">
                                    <a href="../Tambah/rambumerah.php">Rambu Merah</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="spacer"></div>
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn text-left" type="button" data-toggle="collapse" data-target="#collapseTwo">
                                        Data Rambu
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse show">
                                <div class="card-body">
                                    <a href="databiru.php">Data Rambu Biru</a>
                                </div>
                                <div class="card-body">
                                    <a href="datamerah.php">Data Rambu Merah</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="spacer"></div>
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <a button class="btn text-left" type="button" href="../../Home.html">
                                        Logout
                                    </a>
                                </h2>
                            </div>
                        </div>
                    </div>
            </section>
        </div>

        <section class="content">
            <div class="container">
                <h2 align="center">Welcome Admin</h2>
                
            </div>
        </section>
        </div>
    </section>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>