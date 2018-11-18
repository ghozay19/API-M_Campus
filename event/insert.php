<?php 
require_once '../config/koneksi.php';

 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
	$event_image = $_POST['event_image'];
 	$event_desc = $_POST['event_desc'];
 	$event_time = $_POST['event_time'];
 	$event_location = $_POST['event_location'];

 	$query = "INSERT INTO tbl_event (event_image,event_desc, event_time, event_location) VALUES ('$event_image','$event_desc','$event_time','$event_location')";

 	$exeQuery = mysqli_query($konek, $query); 

 	echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'berhasil menambahkan data')) :  json_encode(array('kode' =>2, 'pesan' => 'data gagal ditambahkan'));
 }
 else
 {
 	 echo json_encode(array('kode' =>101, 'pesan' => 'request tidak valid'));
 }

 ?>