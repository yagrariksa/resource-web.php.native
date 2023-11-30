<?php

include("conn.php");

if (isset($_GET["id"])) {
    $conn = new KaryawanConn();
    
    $conn->deleteKaryawanWithId($_GET["id"]);
    header("Location: karyawan.php?message=SuccessDelete");
    die();
} else {
    echo "FAIL....";
    header("Location: karyawan.php?message=FailDelete");
}
exit();
