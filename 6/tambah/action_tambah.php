<?php
include '../koneksi.php';

// menyimpan data kedalam variabel
$name            = $_POST['nama'];
$price          = $_POST['price'];
$categori        		= $_POST['categori'];
$cashier 		= $_POST['cashier'];


// query SQL untuk insert data
$query="INSERT INTO product (name, price, id_categori, id_cashier) VALUES ('$name', '$price', '$categori', '$cashier')";

mysqli_query($con, $query);
// mengalihkan ke halaman index.php
header("location:../index.php");
?>