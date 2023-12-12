<?php
include("wrapper.php");


if (isset($_POST["nama"])) {
    $conn = new RoleConn();

    $data = [
        "nama" => $_POST["nama"],
        "gaji" => $_POST["gaji"],
    ];

    $conn->createRole($data);
    header("Location: role.php?message=SuccessDelete");
    die();
}


?>

<form action="" method="post" style="display: flex; flex-direction: column; padding: 16px; gap: 8px; width: fit-content">
    <h1>Tambah Bagian Baru</h1>
    <input type="text" name="nama" placeholder="Nama Role" required>
    <input type="text" name="gaji" placeholder="Gaji" required>
    <button type="submit">Submit</button>
</form>