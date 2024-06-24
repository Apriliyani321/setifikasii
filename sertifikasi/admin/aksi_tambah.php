<?php 
	include "koneksi.php";
$id_peserta = $_POST['id_peserta'];
$kd_skema = $_POST['kd_skema'];
$nm_peserta = $_POST['nm_peserta'];
$jekel = $_POST['jekel'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];

	$query = mysqli_query($koneksi,"insert into tb_peserta values('','$kd_skema','$nm_peserta','$jekel','$alamat', '$no_hp')");
	if ($query){
		echo "sukses";
	header('location:data_pendaftar.php');	

	}else{
		echo "gagal";
	}
?>