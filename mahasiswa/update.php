	<?php 
 require_once '../config/koneksi.php';

 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
	$mahasiswa_id = $_POST['mahasiswa_id'];
	$mahasiswa_nim = $_POST['mahasiswa_nim'];
 	$mahasiswa_nama = $_POST['mahasiswa_nama'];
 	$mahasiswa_alamat = $_POST['mahasiswa_alamat'];
 	$mahasiswa_notelp = $_POST['mahasiswa_notelp'];

 	$query = "UPDATE  tbl_datamahasiswa SET mahasiswa_nim = '$mahasiswa_nim',mahasiswa_nama = '$mahasiswa_nama',mahasiswa_alamat = '$mahasiswa_alamat', mahasiswa_notelp = '$mahasiswa_notelp' WHERE mahasiswa_id='$mahasiswa_id'";

 	$exeQuery = mysqli_query($konek, $query); 

 	echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'data berhasil update')) :  json_encode(array('kode' =>2, 'pesan' => 'data gagal diupdate'));
 }
 else
 {
	echo json_encode(array('kode' =>101, 'pesan' => 'request tidak valid'));
 }

 ?>