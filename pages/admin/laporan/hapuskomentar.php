<?php

include('../../../koneksi.php');

//get id
$id = $_GET['id'];


$query1 = mysqli_fetch_array($koneksi->query("SELECT * FROM tb_lapor WHERE id_lapor = '$id'"));

$query = "DELETE FROM tb_lapor WHERE id_lapor = '$id'";

if ($koneksi->query($query)) {
    header("location: komentar.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}
