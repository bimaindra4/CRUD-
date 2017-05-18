<?php
include('koneksi.php');

$kdm = $_POST['kdmk'];
$nam = $_POST['nama'];
$sks = $_POST['sks'];
$smt = $_POST['semester'];

$query = "UPDATE matkul SET nama_matkul='$nam', sks='$sks', semester='$smt' WHERE kode_matkul='$kdm'";
$que = mysqli_query($con,$query);
header('location:index.php');
?>