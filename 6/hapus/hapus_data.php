<?php

include('../koneksi.php');  

$id = $_GET['id'];
$query = "DELETE FROM product WHERE id='$id'";
mysqli_query($con, $query);

header('location:../index.php');
 

?> 