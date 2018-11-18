<?php 
 require_once '../config/koneksi.php';

 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
 	$matakuliah_id = $_POST['matakuliah_id'];
 
 	$query = "DELETE FROM tbl_datamatakuliah WHERE matakuliah_id ='$matakuliah_id'";

 	$exeQuery = mysqli_query($konek, $query); 

 	echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'berhasil Menghapus data')) :  json_encode(array('kode' =>2, 'pesan' => 'data gagal dihapus'));
 }
 else
 {
 	 echo json_encode(array('kode' =>101, 'pesan' => 'request tidak valid'));
 }

 ?>