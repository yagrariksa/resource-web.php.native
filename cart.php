<?php
include("template/header.php");
?>

<body>
    <?php
    include("template/navbar.php");
    ?>
    <style>
        .item-wrapper {
            display: flex;
            flex-direction: column;
            gap: 32px;
        }

        .checkout-wrapper {
            position: fixed;
            bottom: 0;
            width: 100%;
            /* right: 0; */
            /* left: 0; */
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: end;
            /* padding: 32px; */
            background-color: var(--text-white-70);
            gap: 32px;
        }

        button#checkout {
            background-color: var(--red);
            color: var(--text-white);
            padding: 32px;
        }



        .item {
            display: flex;
            flex-direction: row;
            padding: 32px;
            border: 1px solid black;
            gap: 16px;
        }

        .item img {
            background-color: black;
            width: 100px;
            height: 100px;
        }
    </style>
    <div class="container">
        <h1>Cart</h1>

        <div class="item-wrapper">
            <div class="item">
                <img src="" alt="">
                <div class="product">
                    <div class="title">title</div>
                    <div class="price">Rp 20.000</div>
                </div>
                <div class="quantity">
                    <div class="qty">5</div>
                </div>
                <div class="subtotal">
                    <div class="text">Rp 100.0000</div>
                </div>
                <button class="delete">Delete</button>
            </div>
            <div class="item">
                <img src="" alt="">
                <div class="product">
                    <div class="title">title</div>
                    <div class="price">Rp 20.000</div>
                </div>
                <div class="quantity">
                    <div class="qty">5</div>
                </div>
                <div class="subtotal">
                    <div class="text">Rp 100.0000</div>
                </div>
                <button class="delete">Delete</button>
            </div>
        </div>

        <div class="checkout-wrapper">
            <div class="total">Rp 200.000</div>
            <button id="checkout">Checkout</button>
        </div>
    </div>

    <?php
    include("template/js.php");
    ?>
</body>