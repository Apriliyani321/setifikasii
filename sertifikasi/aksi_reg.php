<?php
	include "koneksi.php";
	session_start();

	$kd_skema 		= $_POST['kd_skema'];
	$nm_peserta 		= $_POST['nm_peserta'];
	$jekel 	= $_POST['jekel'];
	$alamat 	= $_POST['alamat'];
	$no_hp = $_POST['no_hp'];

	$query = mysqli_query($koneksi,"insert into tb_peserta value('','$kd_skema','$nm_peserta','$jekel','$alamat', '$no_hp')");

	if($query){
		$_SESSION['pesan'] = "Pendaftaran berhasil, Anda akan dihubungi oleh Admin";
		header("location:form_pendaftaran.php");
	}


?>