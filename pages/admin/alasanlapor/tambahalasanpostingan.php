<?php

include('../../../koneksi.php');

$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsim'];
$target = $_POST['target'];
 
echo $judul;
// menginput data ke database
// mysqli_query($koneksi,"INSERT into tb_alasanlapor values('','$judul','$deskripsi','$target')");


// header("location:postingan.php");
?>