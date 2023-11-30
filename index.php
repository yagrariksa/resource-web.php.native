<?php

include("conn.php");

$conn = new KaryawanConn();

$result = $conn->getKaryawanWithRole();

include("head.php");
?>

<!-- 4. penyusunan website -->
<h1>Rumah Makan Sukses Jaya</h1>


<ul>
    <li>
        <a href="/role.php">Daftar Role</a>
    </li>
    <li>
        <a href="/karyawan.php">Daftar Karyawan</a>
    </li>
    <li>
        <a href="/menu.php">Daftar Menu</a>
    </li>
    <li>
        <a href="/pesanan.php">Daftar Pesanan</a>
    </li>
    <li>
        <a href="/customer.php">Daftar Customer</a>
    </li>

</ul>