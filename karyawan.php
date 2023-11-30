<?php

include("conn.php");

$conn = new KaryawanConn();

$result = $conn->getKaryawanWithRole();

include("head.php");
?>
<a href="/karyawan-tambah.php">Tambah Karyawan</a>
<table>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Umur</th>
        <th>Bagian</th>
        <th>Action</th>
    </tr>

    <?php
    $no = 1;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
    ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $row["nama"] ?></td>
                <td><?= $row["umur"] ?></td>
                <td><?= $row["role"] ?></td>
                <td>
                    <button>Edit</button>
                    <a href="/karyawan-hapus.php?id=<?= $row["id"] ?>">Delete</a>
                </td>
            </tr>
    <?php
            $no++;
        }
    }
    ?>
</table>