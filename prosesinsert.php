<?php
include('koneksi.php');

$kdm = $_POST['kdmk'];
$nam = $_POST['nama'];
$sks = $_POST['sks'];
$smt = $_POST['semester'];

$query = "INSERT INTO matkul VALUES('$kdm','$nam','$sks','$smt')";
$que = mysqli_query($con,$query);
header('location:index.php');
?>