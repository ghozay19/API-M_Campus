<?php 
require_once '../config/koneksi.php';

 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
	$matakuliah_kode = $_POST['matakuliah_kode'];
 	$matakuliah_nama = $_POST['matakuliah_nama'];
 	$matakuliah_jurusan = $_POST['matakuliah_jurusan'];
 	$matakuliah_dosen = $_POST['matakuliah_dosen'];

 	$query = "INSERT INTO tbl_datamatakuliah (matakuliah_i,matakuliah_nama, matakuliah_jurusan, matakuliah_dosen) VALUES ('$matakuliah_kode','$matakuliah_nama','$matakuliah_jurusan','$matakuliah_dosen')";

 	$exeQuery = mysqli_query($konek, $query); 

 	echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'berhasil menambahkan data')) :  json_encode(array('kode' =>2, 'pesan' => 'data gagal ditambahkan'));
 }
 else
 {
 	 echo json_encode(array('kode' =>101, 'pesan' => 'request tidak valid'));
 }

 ?>