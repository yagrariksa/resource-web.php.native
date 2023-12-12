<?php

include("role-conn.php");

$conn = new RoleConn();

$result = $conn->getRole();

include("head.php");
?>
<a href="/role-tambah.php">Tambah Bagian</a>
<table>
    <tr>
        <th>No</th>
        <th>Bagian</th>
        <th>Gaji</th>
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
                <td><?= $row["pokok"] ?? "-" ?></td>
                <td>
                    <a href="/role-edit.php?id=<?= $row["id"] ?>"><button>Edit</button></a>
                    <a href="/role-hapus.php?id=<?= $row["id"] ?>">Delete</a>
                </td>
            </tr>
    <?php
            $no++;
        }
    }
    ?>
</table>