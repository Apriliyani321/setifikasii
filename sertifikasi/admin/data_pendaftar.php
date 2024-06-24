<?php 
	include 'koneksi.php';
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Pendaftaran Kegiatan Sertifikasi</title>
	<a href="form_pendaftaran.php" class="btn">Tambah Data</a>
	<style type="text/css">
		body{
			font-family: sans-serif;
			width: 80%;
			text-align: center;
			margin: auto;
			text-decoration : none;
		}
		header {
			width: 100%;
			margin: auto;
			display: flex;
			line-height: 80px;
			position: sticky;
			top: 0;
			z-index: 1;
		}
		.wrapper {
			width: 100%;
			margin: auto;
			position: relative;
		}
		.menu {
			float: right;
		}
		ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
		}
		ul li {
			float: left;
			display: inline;
		}
		ul li a{
			color: #F49D1A;
			font-weight: bold;
			text-align: center;
			padding: 0px 16px 0px 16px;
		}
		ul li a:hover{
			color: red;
		}

		.table1{
			font-family: sans-serif;
			border-collapse: collapse;
			width: 100%;
			margin: auto;
		}

		.table1 tr th {
			background: #35A9DB;
			color: #fff;
			text-align: center;
			padding: 20px 8px;
		}

		.table1, th, td {
			text-align: center;
			padding: 20px 8px;
			border: 1px solid lightblue;
		}

		.btn-edit {
			background: darkblue;
			padding: 10px 15px 10px 15px;
			color: #fff;
			font-family: sans-serif;
			margin: 5px 5px;
			text-decoration: none;
		}

		.btn-hapus{
			background: darkblue;
			padding: 10px 15px 10px 15px;
			color: #fff;
			font-family: sans-serif;
			margin: 5px 5px;
			text-decoration: none;
		}

		.btn {
			background: darkblue;
			padding: 10px 15px 10px 15px;
			color: #fff;
			font-family: sans-serif;
			margin: 5px 5px;
			text-decoration: none;
			float: left;
		}

		a:hover{
			color: red;
		}

		.table1 tr:hover {
			background-color: lightblue;
		}


	</style>
</head>
<body>
	<br>
	<h2>DATA PENDAFTARAN KEGIATAN SERTIFIKASI</h2>
	<?php 
      if (isset($_SESSION['pesan'])) {
        ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>
              <?php echo $_SESSION['pesan']; ?>
          </strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php 
        session_destroy();
            }
    ?>
	<hr>
	<table class="table1">
		<thead>
		<tr>
			<th>NO</th>
			<th>KODE SKEMA</th>
			<th>NAMA</th>
			<th>JENIS KELAMIN</th>
			<th>ALAMAT</th><br>
			<th >NO. HANDPHONE</th>
			<th width="200px">ACTION</th>
		</tr>
		</thead>
		<tbody>
			<?php
			 $no = 1;
			 $data = mysqli_query($koneksi, "select * from tb_peserta");
			 while ($d=mysqli_fetch_array($data)) {
			 	# code...
			 ?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['kd_skema'];?></td>
			<td><?php echo $d['nm_peserta'];?></td>
			<td><?php echo $d['jekel'];?></td>
			<td><?php echo $d['alamat'];?></td>
			<td><?php echo $d['no_hp'];?></td>
			<td><a href="edit_peserta.php?id_peserta=<?php echo $d['id_peserta'];?>" class="btn-edit">Edit</a> <a href="delete_peserta.php?id_peserta=<?php echo $d['id_peserta'];?>" onclick="return confirm('Apakah akan menghapus data ini? ')" class="btn-hapus">Hapus</a></td>
		</tr>
	<?php } ?>
		
		</tbody>
	</table>
</body>
</html>