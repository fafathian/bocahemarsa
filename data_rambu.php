<?php

include("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM Gambar"); ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="style/admin.css">
    <title>Admin Page</title>
</head>

<body>
    <header>
        <nav class="nav flex-column ">
            <div>
                <h1 class="upper nav-link active" href="#"> <i class="fa fa-user" aria-hidden="true"></i> Admin</h1>
            </div>
            <a class="lower nav-link" href="tambah_rambu.php"><i class="fa fa-plus" aria-hidden="true"> </i> TAMBAH</a>
            <a class="lower nav-link" href="data_rambu.php"><i class="fa fa-users" aria-hidden="true"></i> DATA RAMBU</a>
            <a class="lower nav-link" href="login.php"><i class="fa fa-key" aria-hidden="true"></i> LOGOUT</a>
        </nav>
        
    </header>
    <section class="crud">
        <div class="container">
            <h2 class="mb-4 mt-4">Data Gambar Rambu Lalu Lintas</h2>
            <a href="delete_all.php" class="btn btn-danger mt-4 mb-4" onclick="return alert('Are you sure you want to delete all?')">Delete All</a>
            <table class="table table-responsive table-striped">
                <thead style="  display:block;
                                max-height:500px;
                                overflow-y:auto;">
                            <tr>
                                <th>No</th>
                                <th width='60%'>Gambar</th> 
                            </tr>
                </thead>
                <tbody style="  display:block;
                                max-height:500px;
                                overflow-y:auto;">
                            <?php $i = 1; ?>
                            <?php
                            // include database
                            include 'config.php';
                            // perintah sql untuk menampilkan daftar bank yang berelasi dengan tabel kategori bank
                            $sql="select * from gambar order by Id_gambar desc";
                            $hasil=mysqli_query($mysqli,$sql);
                            $no=0;
                            //Menampilkan data dengan perulangan while
                            while ($data = mysqli_fetch_array($hasil)):
                            $no++;
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><img src="file/<?php echo $data['name'];?>" class="rounded" width='30%' alt="Cinque Terre"></td>
                            
                        </tr>
                        <!-- bagian akhir (penutup) while -->
                        <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </section>

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>