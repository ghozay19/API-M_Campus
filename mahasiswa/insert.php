<?php 
 require_once '../koneksi.php';

 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
	$mahasiswa_nim = $_POST['mahasiswa_nim'];
 	$mahasiswa_nama = $_POST['mahasiswa_nama'];
 	$mahasiswa_alamat = $_POST['mahasiswa_alamat'];
 	$mahasiswa_notelp = $_POST['mahasiswa_notelp'];

 	$query = "INSERT INTO tbl_datamahasiswa (mahasiswa_nim,mahasiswa_nama, mahasiswa_alamat, mahasiswa_notelp) VALUES ('$mahasiswa_nim','$mahasiswa_nama','$mahasiswa_alamat','$mahasiswa_notelp')";

 	$exeQuery = mysqli_query($konek, $query); 

 	echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'berhasil menambahkan data')) :  json_encode(array('kode' =>2, 'pesan' => 'data gagal ditambahkan'));
 }
 else
 {
 	 echo json_encode(array('kode' =>101, 'pesan' => 'request tidak valid'));
 }

 ?>