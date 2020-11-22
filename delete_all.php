<?php
include("config.php");

$result = mysqli_query($mysqli, "DELETE * FROM gambar");


header("Location:data_rambu.php");
