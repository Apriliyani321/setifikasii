<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SEVIRA APRILIYANI SUGIARTI</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  	 <img src="images/logo.png" alt="Logo" width="30" height="24">
    <a class="navbar-brand" href="#">SERTIFIKASI KOMPETENSI</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="form_pendaftaran.php">Pendaftaran</a>
        </li>
 				<li class="nav-item">
          <a class="nav-link" href="#">Tentang</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="container">
	<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/slide1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item active">
      <img src="images/slide2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item active">
      <img src="images/slide3.png" class="d-block w-100" alt="...">
    </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
<div class="container mt-5">
	<div class="row">
		<div class="col-6">
			<h1>KEGIATAN SERTIFIKASI BNSP</h1>
			<p>Program Junior Web Developer merupakan salah satu Skema Pelatihan yang berbasis Standar Kompetensi Kerja Nasional Indonesia (SKKNI) dengan skema Junior Web Developer. Peserta pelatihan Junior Web Developer akan mampu membangun dan mengelola aplikasi berbasis web dengan bahasa pemrograman. Di akhir pelatihan, peserta akan mengikuti uji kompetensi dan sertifikasi Junior Web Developer, bagi yang dinyatakan kompeten akan mendapatkan Sertifikat Kompetensi Junior Web Developer dari BNSP.</p>
		</div>
		<div class="col-6">
			<img width="560" height="315" src="images/u3.jpeg" class="img-thumbnail" alt="BNSP">
		</div>
	</div>
</div>

			<div class="col-6">
			<div class="container">
        <h1>Data Peserta</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="nm_peserta">Cari Peserta</label>
                <input type="text" class="form-control" id="nm_peserta" name="nm_peserta" placeholder="Masukkan nama peserta">
                <button type="submit" class="btn btn-primary">Cari</button>
            </div>
        </form>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID Peserta</th>
                    <th>Kode Skema</th>
                    <th>NAMA PESERTA</th>
                    <th>JENIS KELAMIN</th>
                    <th>ALAMAT</th>
                    <th>NO. HANDPHONE</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Connect to database
                $koneksi = mysqli_connect("localhost", "root", "", "db_sertifikasi");

                // Check connection
                if (!$koneksi) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                // Query to retrieve all participant data
                $query = "SELECT * FROM tb_peserta";
                $result = mysqli_query($koneksi, $query);

                // Check if search query is submitted
                if (isset($_POST['nm_peserta'])) {
                    $nm_peserta = $_POST['nm_peserta'];
                    $query = "SELECT * FROM tb_peserta WHERE nm_peserta LIKE '%$nm_peserta%'";
                    $result = mysqli_query($koneksi, $query);
                }

                // Display participant data
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $row['id_peserta'] ?></td>
                        <td><?= $row['kd_skema'] ?></td>
                        <td><?= $row['nm_peserta'] ?></td>
                        <td><?= $row['jekel'] ?></td>
                        <td><?= $row['alamat'] ?></td>
                        <td><?= $row['no_hp'] ?></td>
                    </tr>
                    <?php
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>
<div class="container">
	<h2>GALERI</h2>
	<div class="row">
		<div class="col-4">
			<img src="images/f1.jpeg" class="img-thumbnail" alt="foto 1">
		</div>
		<div class="col-4">
			<img src="images/f2.jpeg" class="img-thumbnail" alt="foto 2">
		</div>
		<div class="col-4">
			<img src="images/f3.jpeg" class="img-thumbnail" alt="foto 3">
		</div>
	</div>
	<div class="row">
		<div class="col-4">
			<img src="images/foto4.png" class="img-thumbnail" alt="foto 4">
		</div>
		<div class="col-4">
			<img src="images/foto5.png" class="img-thumbnail" alt="foto 5">
		</div>
		<div class="col-4">
			<img src="images/foto6.png" class="img-thumbnail" alt="foto 6">
		</div>
	</div>
</div>
<footer class="container mt-5">
	<div class="row">
		<div class="col-6">
			<img src="images/logo.png" alt="logo">
			<h4>SERTIFIKASI KOMPETENSI</h4>
			<p>Gang Kates 5, No. 47, Tembok Banjaran, Adiwerna, Kabupaten Tegal di belakang pasar banjaran Kec. Adiwerna, Jawa Tengah, Kabupaten Tegal, Jawa Tengah 52194</p>
		</div>
		<div class="col-6">
			<h4>Sertifikasi Kompetensi</h4>
			<ul>
				<li>Junior Web Programer</li>
                <li>Digital Marketing</li>
                <li>Desainer Grafis Muda</li>
                <li>Network Desigenr</li>
                <li>Operatpr Komputer Muda</li>


			</ul>
		</div>
	</div>
</footer>
</body>
</html>