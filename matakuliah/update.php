	<?php 
 require_once '../config/koneksi.php';

 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
	$matakuliah_id = $_POST['matakuliah_id'];
	$matakuliah_kode = $_POST['matakuliah_kode'];
 	$matakuliah_nama = $_POST['matakuliah_nama'];
 	$matakuliah_jurusan = $_POST['matakuliah_jurusan'];
 	$matakuliah_dosen = $_POST['matakuliah_dosen'];

 	$query = "UPDATE  tbl_datamatakuliah SET matakuliah_kode = '$matakuliah_kode',matakuliah_nama = '$matakuliah_nama',matakuliah_jurusan = '$matakuliah_jurusan', matakuliah_dosen = '$matakuliah_dosen' WHERE matakuliah_id='$matakuliah_id'";

 	$exeQuery = mysqli_query($konek, $query); 

 	echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'data berhasil update')) :  json_encode(array('kode' =>2, 'pesan' => 'data gagal diupdate'));
 }
 else
 {
	echo json_encode(array('kode' =>101, 'pesan' => 'request tidak valid'));
 }

 ?>