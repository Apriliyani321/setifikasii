<?php
include "../koneksi.php";

	$id_menu=$_GET['id_menu'];

	mysqli_query($koneksi, "delete from tb_menu where id_menu='$id_menu'");

	header("location:data_menu.php")
?>