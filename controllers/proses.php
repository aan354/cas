<?php

$nama = $_POST['nama'];
$organisasi = $_POST['organisasi'];
$aliran = $_POST['aliran'];

require_once '../connect.php';

$query = mysqli_query($connect, "INSERT INTO nama VALUE('', '$nama', '$organisasi', '$aliran')");

if($query) {
    echo "<script>alert('Data masuk bossku'); window.location.href = '../index.php';</script>";
}else{
    echo "<script>alert('Data gagal bossku'); window.location.href = '../index.php';</script>";
} 
?>
