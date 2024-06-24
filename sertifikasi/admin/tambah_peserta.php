<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Tambah Data Peserta</title>
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
	<h1>TAMBAH DATA PESERTA</h1>
	<hr>
	<form action="form_pendaftaran.php" method="post">
        <div class="mb-3">
           <label for="kd_skema" class="form-label">Kode Skema</label>
          <input type="text" name="kd_skema" class="form-control" id="kd_skema" required>
        </div>
         <div class="mb-3">
          <label for="nm_peserta" class="form-label">Nama Lengkap</label>
          <input type="text" name="nm_peserta" class="form-control" id="nm_peserta" required>
        </div>
        <div class="mb-3">
           <label for="jekel" class="form-label">Jenis Kelamin</label>
          <select type="text" name="jekel" class="form-control" id="jekel" required>
        <option value="Laki-laki"></option>     
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
        </div>
          <div class="mb-3">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="text" name="alamat" class="form-control" id="alamat">
        </div> 
        <div class="mb-3">
          <label for="no_hp" class="form-label">NO. Handphone</label>
          <input type="text" name="no_hp" class="form-control" id="no_hp">
        </div> 
        <input type="submit" value="KIRIM" class="btn btn-primary">
        </form>
      </div>

		<input type="submit" value="SIMPAN">
	</form>

	
</body>
</html>