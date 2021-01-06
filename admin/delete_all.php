<?php
include("config.php");

$result = mysqli_query($mysqli, "DELETE * FROM RambuMerah");


header("Location:datamerah.php");
