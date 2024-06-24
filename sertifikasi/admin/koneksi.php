<?php

	$koneksi = mysqli_connect("localhost","root","","db_sertifikasi");

	if (!$koneksi) {
		# code...
		die("koneksi gagal: " . mysqli_connect_error());
	}
	
?>