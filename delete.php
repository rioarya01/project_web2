<?php 
require 'koneksi.php';

$id = $_GET["id"];

if(hapus($id) > 0 ){
	echo "
		<script>
			alert('Data Sudah Terhapus !!!');
			document.location.href = 'index.php';
		</script>
	";
} else {
	echo "
		<script>
			alert('Data Gagal Dihapus !!!');
			document.location.href = 'index.php';
		</script>
	";
}

?>