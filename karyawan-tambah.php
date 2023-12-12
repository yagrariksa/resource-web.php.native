<?php
include("wrapper.php");


if (isset($_POST["nama"]) && isset($_POST["umur"]) && isset($_POST["role"])) {
    $data = [
        "nama" => $_POST["nama"],
        "umur" => $_POST["umur"],
        "role" => $_POST["role"]
    ];
    $conn = new KaryawanConn();

    $conn->createKarwayan($data);
    header("Location: karyawan.php?message=SuccessDelete");
    die();
}

$conn = new RoleConn();

$roles = $conn->getRole();
?>

<form action="" method="post" style="display: flex; flex-direction: column; padding: 16px; gap: 8px; width: fit-content">
    <h1>Tambah Karyawan Baru</h1>
    <input type="text" name="nama" placeholder="Nama Karyawan" required>
    <input type="number" name="umur" placeholder="Umur Karyawan" required>
    <label for="role">Role</label>
    <select name="role" id="role">
        <?php
        while ($row = $roles->fetch_assoc()) {
        ?>
            <option value="<?= $row["id"] ?>"> <?= $row["nama"] ?></option>
        <?php
        }
        ?>
    </select>
    <button type="submit">Submit</button>
</form>