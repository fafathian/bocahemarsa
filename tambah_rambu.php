<?php
$connect = mysqli_connect("localhost", "id15394619_bocahemarsa", "Wnh5ap<WdBoXYRkW", "id15394619_rambulantas");  

$msg = "";
  if (isset($_POST['submit'])) {
  	$image = $_FILES['Gambar']['name'];
  	$image_text = mysqli_real_escape_string($connect, $_POST['name_text']);
  	$target = "file/".basename($image);
 
  	$sql = "INSERT INTO gambar (name, name_text) VALUES ('$image', '$image_text')";
  	mysqli_query($connect, $sql);
 
  	if (move_uploaded_file($_FILES['Gambar']['tmp_name'], $target)) {
  	$msg = "Image uploaded successfully";
  	}else{
  	$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($connect, "SELECT * FROM gambar");

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
            <h2 class="mb-4 mt-4">TAMBAH GAMBAR RAMBU LALU LINTAS</h2>
            <form action="" method="post" enctype="multipart/form-data">
            select image to upload:
                <div class="form-group d-flex justify-content-center" style="flex-direction: column;">
                    <input type="file" class="form-control mt-2" name="Gambar" placeholder="Gambar" id="Gambar" multiple accept="image/gif, image/jpeg">
                    <input type="text" class="form-control mt-2" name="Nama" placeholder="Nama Gambar">
                    <button type="submit" class="btn btn-primary mt-2" value="Upload Image" name="submit">Tambah</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>