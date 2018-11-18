	<?php 
 require_once '../config/koneksi.php';

 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
	$event_id = $_POST['event_id'];
	$event_image = $_POST['event_image'];
 	$event_desc = $_POST['event_desc'];
 	$event_time = $_POST['event_time'];
 	$event_location = $_POST['event_location'];

 	$query = "UPDATE  tbl_event SET event_image = '$event_image',event_desc = '$event_desc',event_time = '$event_time', event_location = '$event_location' WHERE event_id='$event_id'";

 	$exeQuery = mysqli_query($konek, $query); 

 	echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'data berhasil update')) :  json_encode(array('kode' =>2, 'pesan' => 'data gagal diupdate'));
 }
 else
 {
	echo json_encode(array('kode' =>101, 'pesan' => 'request tidak valid'));
 }

 ?>