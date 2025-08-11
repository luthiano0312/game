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
        <input type="submit" value="ataque" name="action">
        <input type="submit" value="fugir" name="action">
    </form>

    <?php 
        session_start();

        var_dump($_SESSION["info"]);
    ?>
    
   
</body>
</html>