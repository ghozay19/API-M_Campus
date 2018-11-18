	<?php 
 require_once '../config/koneksi.php';

 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
	$dosen_id = $_POST['dosen_id'];
	$dosen_nid = $_POST['dosen_nid'];
 	$dosen_nama = $_POST['dosen_nama'];
 	$dosen_matakuliah = $_POST['dosen_matakuliah'];
 	$dosen_notelp = $_POST['dosen_notelp'];

 	$query = "UPDATE  tbl_datadosen SET dosen_nid = '$dosen_nid',dosen_nama = '$dosen_nama',dosen_matakuliah = '$dosen_matakuliah', dosen_notelp = '$dosen_notelp' WHERE dosen_id='$dosen_id'";

 	$exeQuery = mysqli_query($konek, $query); 

 	echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'data berhasil update')) :  json_encode(array('kode' =>2, 'pesan' => 'data gagal diupdate'));
 }
 else
 {
	echo json_encode(array('kode' =>101, 'pesan' => 'request tidak valid'));
 }

 ?>