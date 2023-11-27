<?php
include("template/header.php");
?>

<style>
    #detail-menu {
        background-color: var(--text-white-70);
    }

    div#detail-menu {
        padding: 32px;
        display: flex;
        flex-direction: row;
        gap: 32px;
    }

    #detail-menu img {
        width: 50%;
        /* height: 30vw; */
        object-fit: cover;
        border-radius: 16px;
    }

    #detail-menu h1 {
        font-size: x-large;
        font-weight: 700;
    }

    #detail-menu h2 {
        font-size: xxx-large;
        font-weight: 800;
    }

    .right-container {
        width: 100%;
    }

    .button-group {
        display: flex;
        flex-direction: column;
        /* border: 1px solid black; */
        width: 70%;
        gap: 16px;
    }

    .counter {
        display: flex;
        flex-direction: row;
        width: 100%;
        align-items: center;
        justify-content: space-between;
    }

    .decrease,
    .increase {
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 4px solid green;
        border-radius: 16px;
    }

    .decrease:hover,
    .increase:hover,
    button#add-to-cart:hover {
        cursor: pointer;
        background-color: var(--orange);
    }

    button.decrease.disable {
        background-color: grey;
    }

    button.decrease.disable:hover {
        cursor: auto;
    }

    .count {
        text-align: center;
        font-size: 24px;
    }

    button#add-to-cart {
        padding: 16px;
        background-color: var(--red);
        color: var(--text-white);
        border-radius: 16px;
    }
</style>

<body>
    <?php
    include("template/navbar.php");
    ?>

    <div class="container" id="detail-menu">
        <img src="./soto.jpeg" alt="img" />
        <div class="right-container">
            <h1>Menu Name</h1>
            <h2>Price</h2>

            <div class="button-group">
                <div class="counter">
                    <button class="decrease disable"> - </button>
                    <div class="count"> 0 </div>
                    <button class="increase"> + </button>
                </div>
                <button id="add-to-cart">Add to Cart</button>
            </div>
        </div>
    </div>

    <script>
        // JS DOM
        // Javascript Document Object Manipulation

        let btnIncrease = document.querySelector('button.increase');
        let btnDecrease = document.querySelector('button.decrease');
        let numCounter = document.querySelector('div.count');
        var counter = 0
        let btnAddToCart = document.querySelector('button#add-to-cart');

        const updateView = () => {
            numCounter.innerHTML = counter;
        }

        const toggleDisable = (disable) => {
            if (disable == true) {
                btnDecrease.classList.add("disable")
            } else {
                btnDecrease.classList.remove("disable")
            }
        }

        btnIncrease.addEventListener('click', () => {
            counter++;
            updateView();
            if (counter > 0 && btnDecrease.classList.contains("disable")) {
                toggleDisable(false)
            }
        })

        btnDecrease.addEventListener('click', () => {
            if (counter > 0) {
                counter--;
                updateView();
            }
            if (counter == 0) {
                toggleDisable(true)
            }
        })
    </script>
    <?php
    include("template/js.php");
    ?>
</body>