<?php
include '../koneksi.php';

$id           	= $_POST['id'];
$name           = $_POST['nama'];
$price          = $_POST['price'];
$categori       = $_POST['categori'];
$cashier 		= $_POST['cashier'];

$query = "UPDATE product SET name='$name',price='$price',id_cashier='$cashier',id_categori='$categori' WHERE id='$id'";

mysqli_query($con, $query);

header("location:../index.php");
?>