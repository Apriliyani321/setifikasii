<?php
include "koneksi.php";

$id_peserta = $_POST['id_peserta'];
$kd_skema = $_POST['kd_skema'];
$nm_peserta = $_POST['nm_peserta'];
$jekel = $_POST['jekel'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];

$update = mysqli_query ($koneksi, "update tb_peserta set kd_skema='$kd_skema',nm_peserta='$nm_peserta',jekel='$jekel', alamat='$alamat', no_hp='$no_hp' where id_peserta='$id_peserta'");
header("location:data_pendaftar.php");

?>