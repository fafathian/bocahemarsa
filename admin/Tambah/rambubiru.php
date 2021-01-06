<?php
$connect = mysqli_connect("localhost", "id15394619_bocahemarsa", "Wnh5ap<WdBoXYRkW", "id15394619_rambulantas");

$msg = "";
if (isset($_POST['submit'])) {
    $image = $_FILES['Gambar']['name'];
    $image_text = mysqli_real_escape_string($connect, $_POST['Nama']);
    $target = "../file/" . basename($image);

    $Nama = mysqli_real_escape_string($connect, $_POST["Nama"]);
    $Desk = mysqli_real_escape_string($connect, $_POST["Deskripsi"]);

    $sql = "INSERT INTO RambuBiru (name, nama_gambar, Deskripsi) VALUES ('$image', '" . $_POST['Nama'] . "','" . $_POST['Deskripsi'] . "')";
    mysqli_query($connect, $sql);

    if (move_uploaded_file($_FILES['Gambar']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    } else {
        $msg = "Failed to upload image";
    }
}
$result = mysqli_query($connect, "SELECT * FROM RambuBiru");

// // Display status message
// echo $statusMsg;
// if (isset($_POST["submit"])) {
//     $nama = $_FILES['myfile']['name'];
//     $TYPE = $_FILES['myfile']['type'];
//     $data = file_get_contents($_FILES['myfile']['tmp_name']);
//     $stmt = $connect->prepare("insert into gambar valuew('',?,?,?)");
//     $stmt->bindParam(1,$nama);
//     $stmt->bindParam(2,$TYPE);
//     $stmt->bindParam(3,$data);
//     $stmt->execute();
//     }

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" /> -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="style/admin.css"> -->
    <link rel="stylesheet" href="../../css/dashboard.css">
    <title>Admin Page</title>
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
                                    <a href="rambubiru.php">Rambu Biru</a>
                                </div>
                                <div class="card-body">
                                    <a href="rambumerah.php">Rambu Merah</a>
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
                                    <a href="../Data/databiru.php">Data Rambu Biru</a>
                                </div>
                                <div class="card-body">
                                    <a href="../Data/datamerah.php">Data Rambu Merah</a>
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
            <div class="kumpulan-rambu">
                <h2 class="mb-4 mt-4">TAMBAH GAMBAR RAMBU BERWARNA BIRU</h2>
                <form action="" method="post" enctype="multipart/form-data">
                    select image to upload:
                    <div class="form-group d-flex justify-content-center" style="flex-direction: column;">
                        <input type="file" class="form-control mt-2" name="Gambar" placeholder="Gambar" id="Gambar" multiple accept="image/gif, image/jpeg">
                        <input type="text" class="form-control mt-2" name="Nama" placeholder="Keterangan Gambar">
                        <textarea class="form-control mt-2" placeholder="Deskripsi" name="Deskripsi" required style="height: 130px;"></textarea>
                        <button type="submit" class="btn btn-primary mt-2" value="Upload Image" name="submit">Tambah</button>
                    </div>
                </form>
            </div>
        </section>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>