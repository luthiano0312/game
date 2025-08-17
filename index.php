<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh;">

    <img src="art_style/player.png" width="200" style="image-rendering: pixelated">

    <form action="script.php" method="get">
        <?php 
            if (isset($_GET['history'])) { ?>
                <input type="hidden" value='<?php echo $_GET['history'];?>' name="history"> <?php
            }
        ?>
        <input type="submit" value="ataque" name="action">
        <input type="submit" value="fugir" name="action">
    </form>
 
</body>
</html>