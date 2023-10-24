<?php
// 1 membuat koneksi
$servername = "localhost:3306";
$username = "root";
$password = "rootr00t";
$db = "superprof_web";

$conn = new mysqli($servername, $username, $password, $db);

// 2 verifikasi koneksi
if ($conn->connect_error) {
    die("connection failed" . $conn->connect_error);
}else{
    echo "Connected Successfully";
}
?>