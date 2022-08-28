<?php 
require 'koneksi.php';
if (isset ($_POST["submit"])){
	
	if(tambah($_POST) > 0 ){
		echo "
			<script>
				alert('Data Berhasil Ditambahkan !!!');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('Data Gagal Ditambahkan !!!');
				document.location.href = 'index.php';
			</script>
		";
	}
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Tambah Data Mahasiswa</title>
  </head>
  <body>
  	<div class="container">
    <h1 class="alert alert-info text-center">Tambah Data Mahasiswa</h1>

    <form action="" method="post">
    	<div class="mb-3">
			  <label for="nim" class="form-label">NIM</label>
			  <input type="text" class="form-control " name="nim" id="nim" placeholder="Masukkan NIM Anda" required>
			</div>

			<div class="mb-3">
			  <label for="nama" class="form-label">Nama</label>
			  <input type="text" class="form-control " name="nama" id="nama" placeholder="Masukkan Nama Anda" required>
			</div>

			<div class="mb-3">
			  <label for="email" class="form-label">Email</label>
			  <input type="text" class="form-control " name="email" id="email" placeholder="Masukkan Email Anda" required>
			</div>

			<div class="row mb-3">
				<div class="col-md-6">
					<label for="jurusan" class="form-label">Jurusan</label>
					<select class="form-select" aria-label="Default select example" name="jurusan" id="jurusan">
					  <option value="Teknik Informatika">Teknik Informatika</option>
					  <option value="Sistem Komputer">Sistem Komputer</option>
					</select>
				</div>

				<div class="col-md-6">
					<label for="kelas" class="form-label">Kelas</label>
			  		<input type="text" class="form-control " name="kelas" id="kelas" placeholder="Masukkan Kelas Anda" required>
				</div>
			</div>

			<div class="mb-3">
				<label for="alamat" class="form-label">Alamat</label>
				<textarea class="form-control" name="alamat" id="alamat" rows="3" required></textarea>
			</div>

			<div class="mb-3">
				<label class="form-label" for="jeniskelamin">Jenis Kelamin</label><br>
					<div class="form-check-inline">
					  <input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin" value="Laki-laki" checked="">
						  <label class="form-check-label" for="jeniskelamin">
						    Laki-laki
						  </label>
					</div>

					<div class="form-check-inline">
					  <input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin" value="Perempuan">
						  <label class="form-check-label" for="jeniskelamin">
						    Perempuan
						  </label>
					</div>
			</div>

			<div class="text-center">
					<button type="submit" name="submit" class="btn btn-primary">Tambah Data</button>
					<button type="reset" name="reset" class="btn btn-danger">Reset</button>
			</div>

    </form><br><br>

	    <footer class="text-center">
	       <p>Copyright &copy; 2021 Gak Eror Gak Asik</p>
	    </footer>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>