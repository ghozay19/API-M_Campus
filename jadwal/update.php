	<?php 
 require_once '../config/koneksi.php';

 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
	$jadwal_id = $_POST['jadwal_id'];
	$jadwal_waktu = $_POST['jadwal_waktu'];
 	$jadwal_ruangan = $_POST['jadwal_ruangan'];
 	$jadwal_matakuliah = $_POST['jadwal_matakuliah'];
 	$jadwal_dosen = $_POST['jadwal_dosen'];

 	$query = "UPDATE  tbl_jadwal SET jadwal_waktu = '$jadwal_waktu',jadwal_ruangan = '$jadwal_ruangan',jadwal_matakuliah = '$jadwal_matakuliah', jadwal_dosen = '$jadwal_dosen' WHERE jadwal_id='$jadwal_id'";

 	$exeQuery = mysqli_query($konek, $query); 

 	echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'data berhasil update')) :  json_encode(array('kode' =>2, 'pesan' => 'data gagal diupdate'));
 }
 else
 {
	echo json_encode(array('kode' =>101, 'pesan' => 'request tidak valid'));
 }

 ?>