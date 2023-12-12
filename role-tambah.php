<?php
include("role-conn.php");

if (isset($_POST["nama"])) {
    $data = [
        "nama" => $_POST["nama"],
    ];

    $conn->createRole($data);
    header("Location: role.php?message=SuccessDelete");
    die();
}


?>

<form action="" method="post" style="display: flex; flex-direction: column; padding: 16px; gap: 8px; width: fit-content">
    <h1>Tambah Bagian Baru</h1>
    <input type="text" name="nama" placeholder="Nama Role" required>
    <button type="submit">Submit</button>
</form>

