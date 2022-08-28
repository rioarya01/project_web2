<?php 
$koneksi = mysqli_connect("localhost","root","","db_project");

// koneksi untuk menampilkan data
function query($query){
	global $koneksi;
	$result = mysqli_query($koneksi, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ){
		$rows[] = $row;
	}
	return $rows;
}

// koneksi untuk menambah data (insert)
function tambah($data){
	global $koneksi;
	$nim = htmlspecialchars($data["nim"]);
	$nama = htmlspecialchars($data["nama"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$kelas = htmlspecialchars($data["kelas"]);
	$jeniskelamin = htmlspecialchars($data ["jeniskelamin"]);
	$alamat = htmlspecialchars($data["alamat"]);

	$query = "INSERT INTO datamahasiswa
				VALUES ('','$nim','$nama','$email','$jurusan','$kelas','$jeniskelamin','$alamat')";
	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
}

// koneksi untuk mengubah data (update)
function ubah($data){
	global $koneksi;

	$id = $data["id"];
	$nim = htmlspecialchars($data["nim"]);
	$nama = htmlspecialchars($data["nama"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$kelas = htmlspecialchars($data["kelas"]);
	$jeniskelamin = htmlspecialchars($data["jeniskelamin"]);
	$alamat = htmlspecialchars($data["alamat"]);

	$query = "UPDATE datamahasiswa SET 
				nim = '$nim',
				nama = '$nama',
				email = '$email',
				jurusan = '$jurusan',
				kelas = '$kelas',
				jeniskelamin = '$jeniskelamin',
				alamat = '$alamat'
			WHERE id = $id
			";

	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
}

// koneksi untuk menghapus (delete)
function hapus($id){
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM datamahasiswa WHERE id = $id");
	return mysqli_affected_rows($koneksi);
}

// fungsi untuk mencari data mahasiswa dengan cepat (read)
function search($keyword){
	$query = "SELECT * FROM datamahasiswa 
				WHERE 
				nim LIKE '%$keyword%' OR 
				nama LIKE '%$keyword%' OR
				email LIKE '%$keyword%' OR
				jurusan LIKE '%$keyword%' OR
				kelas LIKE '%$keyword%' OR
				jeniskelamin LIKE '%$keyword%' OR
				alamat LIKE '%$keyword%'
			";
	return query($query);
}

?>