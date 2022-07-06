<?php

include('../../../koneksi.php');

//get id
$id = $_GET['id'];
  
$query = "DELETE tb_komentar , tb_lapor FROM tb_komentar  INNER JOIN tb_lapor ON tb_lapor.id_komentar  = tb_komentar .id_komentar  WHERE tb_komentar .id_komentar  = '$id'"; 
   
if ($koneksi->query($query)) {
    header("location: komentar .php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}
