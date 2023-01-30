<?php
include_once(__DIR__ . "/app.php");
$oldData = json_decode($_SESSION['login_form_data'], 1);

if ($userLoggedIn) {
    header("location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rent</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Unbounded&display=swap" rel="stylesheet">
    <script defer src="./main.js"></script>
</head>
<body>
    <?php
    include_once(__DIR__ . "/header.php");
    ?>
    <main>
        <div class="banner">
            <div class="banner-text">Premium cars just for you</div>
        </div>
        <div class="login-form-section">
            <h2>Login</h2>
            <form class="login-form" action="login.php" method="POST">
                <label>E-mail:</label>
                <input type="email" name="email" value="<?= $oldData['email'] ?? "" ?>">
                <label>Password:</label>
                <input type="password" name="password" value="<?= $oldData['password'] ?? "" ?>">
                <button type="submit" class="submit">Submit</button>
            </form>
        </div>
    </main>
    <footer id="footer">
        <?php
        include_once(__DIR__ . "/footer.php");
        ?>
    </footer>
    <script>
        const userLoggedIn = <?= $userLoggedIn; ?>;
        const adminLoggedIn = <?=$adminLoggedIn?>;
    </script>
</body>
</html>
