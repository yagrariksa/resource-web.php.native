<?php

include("conn.php");

if (isset($_GET["id"])) {
    # code...
    echo "DELETE....";
    $sql = "DELETE FROM karyawan WHERE id=" . $_GET["id"];
    $conn->query($sql);
    header('Location : /index.php?message=SuccessDelete');
}else{
    echo "FAIL....";
    header("Location : /index.php?message=FailDelete");
}

