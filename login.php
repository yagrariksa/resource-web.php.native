<?php
include("template/header.php");
include("template/style-auth-form.php")
?>


<body>
    <?php
    include("template/navbar.php");
    ?>
    <div class="container" id="login-container">
        <?php
        // if (isset($_POST["email"])) {
        //     $email = $_POST["email"];
        //     print($email);
        // }
        // if (isset($_GET["email"])) {
        //     $email = $_GET["email"];
        //     print($email);
        // }
        ?>
        <div class="wrapper">
            <h1>Login</h1>
            <form action="" method="post">
                <input type="text" name="email" placeholder="your@email.com" required>
                <input type="password" name="password" placeholder="yourStrongPassword" required>
                <button id="form-submit" type="submit">Login</button>
            </form>
        </div>
    </div>
    <?php
    include("template/js.php");
    ?>
</body>