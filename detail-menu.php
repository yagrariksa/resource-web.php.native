<?php
include("template/header.php");
?>

<style>
    #detail-menu {
        background-color: var(--bg-grey);
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

    <style>
        .pop-up-layer {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            /* background-color: #0000006b; */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .pop-up-layer.hidden {
            display: none;
        }

        .pop-up {
            background-color: white;
            max-width: 50%;
            height: auto;
            width: 500px;
            display: flex;
            flex-direction: column;
            padding: 16px;
            border-radius: 16px;
        }

        .pop-up h3 {
            text-align: center;
        }

        .pop-up p {
            margin: 16px 0;
        }

        .pop-up .btn-wrapper {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
        }

        .pop-up .btn-wrapper button {
            width: 100%;
            /* border: 1px solid black; */
            padding: 8px;
            background-color: var(--bg-grey);
            border-radius: 8px;
        }

        button.agree {
            color: green;
        }

        button.agree:hover {
            color: white;
            background-color: green;
        }

        button.disagree {
            color: red;
        }

        button.disagree:hover {
            color: white;
            background-color: red;
        }

        .pop-up-layer .bg {
            background-color: #0000006b;
            position: absolute;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
            z-index: -1;
        }
    </style>
    <div class="pop-up-layer hidden">
        <div class="bg"></div>
        <div class="pop-up">
            <h3>Attention</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam ad reiciendis mollitia sit adipisci repudiandae commodi ipsam repellendus aperiam deserunt.</p>
            <div class="btn-wrapper">
                <button class="agree">Yes</button>
                <button class="disagree">No</button>
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

        const popUpLayer = document.querySelector('.pop-up-layer');

        const showPopUpLayer = (show) => {
            if (show) {
                popUpLayer.classList.remove("hidden")
            } else {
                popUpLayer.classList.add("hidden")
            }
        }

        btnAddToCart.addEventListener('click', () => {
            showPopUpLayer(true)
        })

        document.querySelector('.pop-up-layer .bg').addEventListener('click', () => {
            showPopUpLayer(false)
        })
    </script>
    <?php
    include("template/js.php");
    ?>
</body>