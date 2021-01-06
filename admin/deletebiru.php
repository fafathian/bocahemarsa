<?php
$connect = mysqli_connect("localhost", "id15394619_bocahemarsa", "Wnh5ap<WdBoXYRkW", "id15394619_rambulantas");  

$Id = $_GET['id_RB'];

$sql = "DELETE FROM RambuBiru WHERE id_RB = $Id";
mysqli_query($connect, $sql);

header("Location:datamerah.php");