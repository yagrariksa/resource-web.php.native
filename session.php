<?php

session_start();

// var_dump(session_status() . " Status");
// var_dump($_SESSION["food"] ?? "no Session");

function food_is_on_session()
{
    return isset($_SESSION["food"]);
}

function addFood($food)
{
    if (!food_is_on_session()) {
        $_SESSION["food"] = [];
    }
    array_push($_SESSION["food"], $food);
}

function removeLast()
{
    if (food_is_on_session()) {
        array_pop($_SESSION["food"]);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST["action"] == "add") {
        addFood($_POST["food"]);
    }
} else {
    if (isset($_GET["action"])) {
        if ($_GET["action"] == "remove-last") {
            removeLast();
        }
    }
}
?>

<div class="" style="display: flex; flex-direction: column; gap: 16px; margin: 16px;">

    <form action="" method="post">
        <input type="hidden" name="action" value="add">
        <input type="text" name="food">
        <button type="submit">submit</button>
    </form>
    <a href="?action=remove-last">remove last</a>
    <a href="?action=remove-all">remove all</a>

    <ul>
        <?php
        if (food_is_on_session()) {
            for ($i = 0; $i < sizeof($_SESSION["food"]); $i++) {
                $value = $_SESSION["food"][$i];
                echo "<li> {$value} </li>";
            }
        } else {
            echo "<h3>no food in session </h3>";
        }
        ?>
    </ul>
</div>