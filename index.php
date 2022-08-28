<?php 
require 'koneksi.php';
$mahasiswa = query("SELECT * FROM datamahasiswa");

// tombol cari ditekan
if(isset($_POST["search"])){
  $mahasiswa = search($_POST["keyword"]);
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

    <title>Halaman Admin</title>
  </head>
  <body>
    <div class="container">
      <h1 class="alert alert-info text-center">Daftar Mahasiswa</h1>
        <div class="row mb-3">
          <div class="col-md-6">
            <a href="insert.php">
              <button class="btn btn-primary">Tambah Data Mahasiswa</button>
            </a>
          </div>

          <div class="col-md-6">
            <form action="" method="post" class="d-flex">
              <input type="text" name="keyword" autofocus placeholder="Masukkan keyword pencarian..." class="form-control me-2" aria-label="search" autocomplete="off">
              <button type="submit" name="search" class="btn btn-outline-primary">Search</button>
            </form>
          </div>
        </div>


        <table class="table table-bordered table-hover">
          <thead class="text-center table-dark">
            <tr>
              <th scope="col">No. Urut</th>
              <th scope="col">Aksi</th>
              <th scope="col">NIM</th>
              <th scope="col">Nama</th>
              <th scope="col">Email</th>
              <th scope="col">Jurusan</th>
              <th scope="col">Kelas</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Alamat</th>
            </tr>
          </thead>

          <tbody>

            <?php $i = 1; ?>
            <?php foreach ( $mahasiswa as $row ) : ?>

              <tr>
                <td scope="row" class="text-center"><?= $i; ?></td>
                <td>
                  <a href="update.php?id=<?= $row["id"]; ?>">
                    <button class="btn btn-success btn-sm">Ubah</button>
                  </a>
                  <a href="delete.php?id=<?= $row["id"]; ?>"
                      onclick="return confirm('Apakah Data Ini Akan Dihapus?');">
                    <button class="btn btn-danger btn-sm">Hapus</button> 
                  </a>
                </td>

                <td><?= $row["nim"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
                <td><?= $row["kelas"]; ?></td>
                <td><?= $row["jeniskelamin"]; ?></td>
                <td><?= $row["alamat"]; ?></td>
              </tr>

            <?php $i++; ?>
            <?php endforeach; ?>

          </tbody>
        </table>

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