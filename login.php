<?php
$connect = mysqli_connect("localhost", "id15394619_bocahemarsa", "Wnh5ap<WdBoXYRkW", "id15394619_rambulantas");  
session_start();
if (isset($_SESSION["Username"])) {
    header("location:logout.php");
}
if (isset($_POST["register"])) {
    if (empty($_POST["username"]) || empty($_POST["password"])) {
        echo '<script>alert("Both Fields are required")</script>';
    } else {
        $username = mysqli_real_escape_string($connect, $_POST["username"]);
        $password = mysqli_real_escape_string($connect, $_POST["password"]);
        $password = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO login_admin(username, password) VALUES('$username', '$password')";
        if (mysqli_query($connect, $query)) {
            echo '<script>alert("Registrasi Selesai, Silakan Login")</script>';
        }
    }
}
if (isset($_POST["login"])) {
    if (empty($_POST["username"]) || empty($_POST["password"])) {
        echo '<script>alert("Data Tidak Boleh Kosong")</script>';
    } else {
        $username = mysqli_real_escape_string($connect, $_POST["username"]);
        $password = mysqli_real_escape_string($connect, $_POST["password"]);
        $query = "SELECT * FROM login_admin WHERE username = '$username'";
        $result = mysqli_query($connect, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                if (password_verify($password, $row["password"])) {
                    $_SESSION["username"] = $username;
                    header("location:logout.php");
                } else {
                    echo '<script>alert("Data Yang Anda Masukkan Salah!")</script>';
                }
            }
        } else {
            echo '<script>alert("Data Yang Anda Masukkan Salah!")</script>';
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link rel="stylesheet" href="style/style_1.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
    <title>Home</title>
</head>

<body>
    <div class="container" style="width:500px;">
        <?php
        if (isset($_GET["action"]) == "login") {
        ?>
            <div class="card text-center mt-5">
                <div class="card-body">
                    <h3 align="center">Login</h3>
                    <form method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <button type="submit" name="login" value="Register" class="btn btn-danger">Login</button>
                        <!-- <p class="mt-5" align="center">Belum Punya Akun? <a href="login.php?action=register">Daftar</a></p> -->
                    </form>
                </div>
            </div>
        <?php
        } else {
        ?>
            <div class="card text-center mt-5">
                <div class="card-body">
                    <h3 class="text-center">Register</h3>
                    <form method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <button type="submit" name="register" value="Register" class="btn btn-danger">Daftar</button>
                        <p class="mt-5" align="center">Sudah Punya Akun? <a href="login.php?action=login">Login</a></p>
                    </form>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</body>


</html>