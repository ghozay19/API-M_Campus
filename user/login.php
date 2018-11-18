<?php
require_once '../include/DB_Functions.php';
$db = new DB_Functions();
 
// json response array
$response = array("error" => FALSE);
 
if (isset($_POST['email']) && isset($_POST['encrypted_password'])) {
 
    // menerima parameter POST ( email dan encrypted_password )
    $email = $_POST['email'];
    $encrypted_password = $_POST['encrypted_password'];
 
    // get the user by email and encrypted_password
    // get user berdasarkan email dan encrypted_password
    $user = $db->getUserByEmailAndPassword($email, $encrypted_password);
 
    if ($user != false) {
        // user ditemukan
        $response["error"] = FALSE;
        $response["uid"] = $user["unique_id"];
        $response["user"]["nim"] = $user["nim"];
        $response["user"]["nama"] = $user["nama"];
        $response["user"]["email"] = $user["email"];
        echo json_encode($response);
    } else {
        // user tidak ditemukan encrypted_password/email salah
        $response["error"] = TRUE;
        $response["error_msg"] = "Login gagal. encrypted_password/Email salah";
        echo json_encode($response);
    }
} else {
    $response["error"] = TRUE;
    $response["error_msg"] = "Parameter (email atau encrypted_password) ada yang kurang";
    echo json_encode($response);
}
?>