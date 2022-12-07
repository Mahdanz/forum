<?php

include('../../../koneksi.php');

$judul_alasan =  htmlspecialchars($_POST['judul_alasan']);
$deskripsi =  htmlspecialchars($_POST['deskripsi']);
$targetalasan = $_POST['targetalasan'];
 
echo $judul_alasan;
// menginput data ke database
mysqli_query($koneksi,"INSERT into tb_alasanlapor values('','$judul_alasan','$deskripsi','$targetalasan')");


header("location:postingan.php");
?>