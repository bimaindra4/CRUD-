<?php
include('koneksi.php');

$id = $_GET['id'];

$query = "DELETE FROM matkul WHERE kode_matkul='$id'";
$que = mysqli_query($con,$query);
header('location:index.php');
?>