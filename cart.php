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
            gap: 16px;
        }

        .checkout-wrapper {
            width: 100%;
            position: sticky;
            margin-top: 32px;
            bottom: 0;
            /* right: 0; */
            /* left: 0; */
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: end;
            /* padding: 32px; */
            background-color: var(--bg-grey);
            gap: 32px;
        }

        @media screen and (min-width: 1024px) {
            .checkout-wrapper {
                max-width: 1024px;
            }
        }



        button#checkout {
            background-color: var(--red);
            color: var(--text-white);
            padding: 32px;
        }

        .item {
            display: grid;
            grid-template-columns: 100px 1.5fr 1fr 1fr .5fr;
            /* flex-direction: row; */
            padding: 16px;
            /* border: 1px solid black; */
            background-color: var(--bg-grey);
            gap: 16px;
            align-items: center;
            justify-items: center;
            margin: 0 16px;
        }

        .item img {
            background-color: black;
            width: 100px;
            height: 100px;
        }

        .product {
            font-size: larger;
            width: 100%;
        }

        .product .title {
            text-transform: capitalize;
        }

        .quantity,
        .subtotal {
            /* width: 100%; */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        button.delete {
            background-color: var(--red);
            width: fit-content;
            padding: 8px 16px;
            font-size: medium;
            color: white;
        }
    </style>
    <div class="container">
        <h1>Cart</h1>

        <div class="item-wrapper">
            <?php
            for ($i = 0; $i < 10; $i++) {
            ?>
                <div class="item">
                    <img src="" alt="">
                    <div class="product">
                        <div class="title">Item <?= $i + 1 ?></div>
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
            <?php
            }
            ?>
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