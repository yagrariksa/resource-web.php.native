<?php

include("conn.php");

session_start();

function cartExist()
{
    return isset($_SESSION["cart"]);
}

function addItemToCart($id)
{
    if (!cartExist()) {
        $_SESSION["cart"] = [];
    }

    $index = array_search($id, array_column($_SESSION["cart"], "id"));
    if ($index !== false) {
        $_SESSION["cart"][$index]["qty"]++;
    } else {
        array_push($_SESSION["cart"], ["id" => $id, "qty" => 1]);
    }
}

function reduceItemInCart($id)
{
    $index = array_search($id, array_column($_SESSION["cart"], "id"));
    if ($index !== false) {
        $_SESSION["cart"][$index]["qty"]--;

        if ($_SESSION["cart"][$index]["qty"] == 0) {
            unset($_SESSION["cart"][$index]);
            $_SESSION["cart"] = array_values($_SESSION["cart"]);
        }
    }
}

function deleteItemFromCart($id)
{
    $index = array_search($id, array_column($_SESSION["cart"], "id"));
    if ($index !== false) {
        unset($_SESSION["cart"][$index]);
        $_SESSION["cart"] = array_values($_SESSION["cart"]);
    }
}

if (isset($_GET["action"]) && isset($_GET["id"])) {
    switch ($_GET["action"]) {
        case 'add':
            addItemToCart($_GET["id"]);
            break;

        case 'reduce':
            reduceItemInCart($_GET["id"]);
            break;

        case 'delete':
            deleteItemFromCart($_GET["id"]);
            break;

        default:
            # code...
            break;
    }
    header("Location: menu.php");
    die();
}


$conn = new MenuConn();

$result = $conn->getMenu();

include("head.php");

?>
<a href="/menu-tambah.php">Tambah Menu</a>
<table>
    <tr>
        <th>No</th>
        <th>Menu</th>
        <th>Harga</th>
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
                <td><?= $row["harga"] ?></td>
                <td>
                    <a href="/menu.php?action=add&id=<?= $row["id"] ?>"><button>Add to Cart</button></a>
                    <a href="/menu-edit.php?id=<?= $row["id"] ?>"><button>Edit</button></a>
                    <a href="/menu-hapus.php?id=<?= $row["id"] ?>">Delete</a>
                </td>
            </tr>
    <?php
            $no++;
        }
    }
    ?>
</table>

<br><br>
<?php
if (isset($_SESSION["cart"])) {

?>
    <h2>Item di Keranjang</h2>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>qty</th>
            <th>Aksi</th>
        </tr>
        <?php
        for ($i = 1; $i < sizeof($_SESSION["cart"]) + 1; $i++) {
            $cart = $_SESSION["cart"][$i - 1];
            $cartData = $conn->getMenuBy($cart["id"]);
        ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $cartData["nama"] ?></td>
                <td>
                    <a href="/menu.php?action=reduce&id=<?= $cart["id"] ?>"><button>-</button></a>
                    <?= $cart["qty"] ?>
                    <a href="/menu.php?action=add&id=<?= $cart["id"] ?>"><button>+</button></a>
                </td>
                <td>
                    <a href="/menu.php?action=delete&id=<?= $cart["id"] ?>"><button>Hapus</button></a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
<?php
} else {
    echo "<h3>No Item in Cart</h3>";
}
?>