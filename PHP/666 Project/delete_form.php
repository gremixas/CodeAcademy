<?php
include_once(__DIR__ . "/app.php");

if (empty($_GET['id'])) {
    die("ID nereikia?");
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
        <div class="car-delete" id="car-list">
            <br>
            <div class="delete-dialog">
                <h2>Do you really wish to delete this car?</h2>
                <br>
                <?= Car::drawCarById($_GET['id']) ?>
                <form action="delete.php" method="get">
                    <input type="hidden" name="id" value="<?=$_GET['id']?>">
                    <button type="submit">Yes</button>
                </form>
            </div>
        </div>
    </main>
    <footer id="footer"></footer>
    <script>
        const userLoggedIn = <?=$userLoggedIn?>;
        const adminLoggedIn = <?=$adminLoggedIn?>;
    </script>
</body>
</html>
