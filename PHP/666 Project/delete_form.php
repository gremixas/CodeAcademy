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
        <div class="car-list" id="car-list">
            <h2>Do you really wish to delete this car?</h2>
            <br>
            <form action="delete.php" method="get">
                <input type="hidden" name="id" value="<?=$_GET['id']?>">
                <button type="submit">Yes</button>
            </form>
            <br>
            <?php
                // for ($i=0; $i < 20; $i++) {
                //     echo "<img class='car-photo' src='https://loremflickr.com/".rand(250, 300)."/".rand(250, 300)."/car'>";
                // }
            // dump($adminLoggedIn);
            echo Car::drawCarById($_GET['id']);
            ?>
        </div>
    </main>
    <footer id="footer"></footer>
    <script>
        const userLoggedIn = <?=$userLoggedIn?>;
    </script>
</body>
</html>
