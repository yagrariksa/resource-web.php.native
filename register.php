<?php
include("template/header.php");
include("template/style-auth-form.php")
?>

<body>
    <?php
    include("template/navbar.php");
    ?>
    <div class="container" id="login-container">
        <div class="wrapper">
            <h1>Register</h1>
            <form action="" method="post">
                <input type="text" name="email" placeholder="your@email.com" required>
                <input type="text" name="firstName" placeholder="John" required>
                <input type="text" name="lastName" placeholder="Doe" required>
                <input type="number" name="Phone Number" placeholder="+1 756 827" required>
                <input type="password" name="password" placeholder="yourStrongPassword" required>
                <input type="password" name="password" placeholder="repeat Your Password" required>
                <button id="form-submit" type="submit">Login</button>
            </form>
        </div>
    </div>
    <?php
    include("template/js.php");
    ?>
</body>