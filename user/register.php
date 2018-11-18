<?php
 
require_once '../include/DB_Functions.php';
$db = new DB_Functions();
 
// json response array
$response = array("error" => FALSE);
 
if (isset($_POST['nim']) && isset($_POST['nama']) && isset($_POST['email']) && isset($_POST['encrypted_password'])) {
 
    // menerima parameter POST ( nama, email, encrypted_password )
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $encrypted_password = $_POST['encrypted_password'];
 
    // Cek jika user ada dengan email yang sama
    if ($db->isUserExisted($email)) {
        // user telah ada
        $response["error"] = TRUE;
        $response["error_msg"] = "User telah ada dengan email " . $email;
        echo json_encode($response);
    } else {
        // buat user baru
        $user = $db->simpanUser($nim, $nama, $email, $encrypted_password);
        if ($user) {
            // simpan user berhasil
            $response["error"] = FALSE;
            $response["uid"] = $user["unique_id"];
            $response["user"]["nim"] = $user["nim"];
            $response["user"]["nama"] = $user["nama"];
            $response["user"]["email"] = $user["email"];
            echo json_encode($response);
        } else {
            // gagal menyimpan user
            $response["error"] = TRUE;
            $response["error_msg"] = "Terjadi kesalahan saat melakukan registrasi";
            echo json_encode($response);
        }
    }
} else {
    $response["error"] = TRUE;
    $response["error_msg"] = "Parameter (nama, email, atau encrypted_password) ada yang kurang";
    echo json_encode($response);
}
?>