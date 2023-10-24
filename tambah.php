<?php
include("conn.php");

if(isset($_POST["nama"])) {
    $nama = $_POST["nama"];
    $umur = $_POST["umur"];
    $role = $_POST["role"];
    echo "<br>";
    var_dump($_POST);
    echo "<br>";
    $sql = "INSERT INTO karyawan (nama, umur, role) VALUES ('" . $nama ."', " . $umur . ", " . $role . ")";
    var_dump($sql);
    $conn->query($sql);
    header('Location: /');

    // die();
}

$sql = "SELECT id, nama FROM bagian";
$result = $conn->query($sql);
?>

<head>
    <style>
        form {
            display: flex;
            flex-direction: column;
            margin: 20px;
            gap: 16px;
        }

        input, select, button {
            width: fit-content;
        }
    </style>
</head>

<body>
    <br>
    <a href="/">Kembali</a>
    <form action="" method="post">
        <input type="text" placeholder="Nama" name="nama" required>
        <input type="number" placeholder="Umur" name="umur" required>

        <select name="role" id="">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <option value="<?= $row["id"] ?>"><?= $row["nama"] ?></option>
            <?php
                }
            }
            $conn->close();
            ?>
        </select>

        <button type="submit">Tambahkan Data</button>
    </form>
</body>