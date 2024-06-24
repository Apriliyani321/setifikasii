<?php
	include "koneksi.php";

	$id = $_GET['id_peserta'];
	$data = mysqli_query($koneksi, "select * from tb_peserta where id_peserta='$id'");
	$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Form Pendaftaran</title>
	<style type="text/css">
		body {
			width: 80%;
			margin: auto;
		}
		input, select{
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			box-sizing: border-box;
		}
		label{
			font-family: sans-serif;
		}

	</style>

</head>
<body>
	<h1>FORMULIR PENDAFTARAN SERTIFIKASI</h1>
	<hr>
	<form action="update.php" method="post">
		<div>
			<label for="kd_skema">KODE SKEMA</label><br>
			<input type="hidden" name="id_peserta" value="<?php echo $d['id_peserta'];?>">
			<input type="text" name="kd_skema" value="<?php echo $d['kd_skema'];?>"  required="required">
		</div>

		<div>
			<label for="nm_peserta">NAMA LENGKAP</label><br>
			<input type="text" name="nm_peserta" value="<?php echo $d['nm_peserta'];?>">
		</div>
		<div>
			<label for="jekel">JENIS KELAMIN</label><br>
			<select name="jekel" id="jekel">
				<option value="Laki-laki">Laki-laki</option>
				<option value="Perempuan">Perempuan</option>
			</select>
		</div>
		<div>
			<label for="alamat">ALAMAT</label><br>
			<input type="text" name="alamat" value="<?php echo $d['alamat'];?>">
		</div>
		<div>
			<label for="no_hp">NO. HANDPHONE</label><br>
			<input type="text" name="no_hp" value="<?php echo $d['no_hp'];?>">
		</div>
		<br>
		<input type="submit" value="SIMPAN">
	</form>

	
</body>
</html>