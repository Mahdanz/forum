<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include '../koneksi.php';
 
// menangkap data yang dikirim dari form
$email = $_POST['email'];
$password = $_POST['password'];

  
$data = mysqli_query($koneksi,"select * from pengguna where email='$email' and password='$password'");
 
// print_r($_POST);
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 

if($cek > 0){
	$_SESSION['email'] = $email;
	$_SESSION['status'] = "login";
	header("location:admin/index.php");
}else{
	header("location:loginpengguna.php?pesan=gagal");
}
?>