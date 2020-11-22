<?php
$connect = mysqli_connect("localhost", "id15394619_bocahemarsa", "Wnh5ap<WdBoXYRkW", "id15394619_rambulantas");  

$Id = $_GET['Id_Gambar'];

$sql = "DELETE FROM gambar WHERE Id_Gambar = $Id";
mysqli_query($connect, $sql);

header("Location:data_rambu.php");
