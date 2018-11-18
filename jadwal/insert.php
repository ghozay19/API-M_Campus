<?php 
require_once '../config/koneksi.php';

 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
	$jadwal_waktu = $_POST['jadwal_waktu'];
 	$jadwal_ruangan = $_POST['jadwal_ruangan'];
 	$jadwal_matakuliah = $_POST['jadwal_matakuliah'];
 	$jadwal_dosen = $_POST['jadwal_dosen'];

 	$query = "INSERT INTO tbl_jadwal (jadwal_waktu,jadwal_ruangan, jadwal_matakuliah, jadwal_dosen) VALUES ('$jadwal_waktu','$jadwal_ruangan','$jadwal_matakuliah','$jadwal_dosen')";

 	$exeQuery = mysqli_query($konek, $query); 

 	echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'berhasil menambahkan data')) :  json_encode(array('kode' =>2, 'pesan' => 'data gagal ditambahkan'));
 }
 else
 {
 	 echo json_encode(array('kode' =>101, 'pesan' => 'request tidak valid'));
 }

 ?>