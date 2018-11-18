<?php 
require_once '../config/koneksi.php';

 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
	$dosen_nid = $_POST['dosen_nid'];
 	$dosen_nama = $_POST['dosen_nama'];
 	$dosen_matakuliah = $_POST['dosen_matakuliah'];
 	$dosen_notelp = $_POST['dosen_notelp'];

 	$query = "INSERT INTO tbl_datadosen (dosen_nid,dosen_nama, dosen_matakuliah, dosen_notelp) VALUES ('$dosen_nid','$dosen_nama','$dosen_matakuliah','$dosen_notelp')";

 	$exeQuery = mysqli_query($konek, $query); 

 	echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'berhasil menambahkan data')) :  json_encode(array('kode' =>2, 'pesan' => 'data gagal ditambahkan'));
 }
 else
 {
 	 echo json_encode(array('kode' =>101, 'pesan' => 'request tidak valid'));
 }

 ?>