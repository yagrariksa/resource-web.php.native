<?php

include("conn.php");

// 3. query ke database
$sql = "SELECT k.id as 'id' , k.nama , k.umur , b.nama as 'role'  FROM karyawan k 
JOIN bagian b ON k.`role` = b.id 
ORDER BY k.id";
$result = $conn->query($sql);
// while ($row = $result->fetch_assoc()) {
//     echo "<br>";
//     var_dump($row);
// }

// die();
include("head.php");
?>

<!-- 4. penyusunan website -->
<h1>Hello World</h1>

<?php
if (isset($_GET["message"])) {
    echo "<h2>" . $_GET["message"] . " </h2>";
}
?>

<a href="/tambah.php">Tambah Data</a>
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
                    <a href="/delete.php?id=<?= $row["id"] ?>">Delete</a>
                </td>
            </tr>
    <?php
            $no++;
        }
    }
    $conn->close();
    ?>
</table>