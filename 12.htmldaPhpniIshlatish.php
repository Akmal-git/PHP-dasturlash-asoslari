<?php
$foots = array("Manti", "Osh", "Norin", "Somsa", "Do'lma")
?>

<!DOCTYPE html>
<html lang="uz">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML5 Namuna</title>
</head>

<body>
    <h1><?= "Bu echo ning qisqartirilgani" ?></h1>
    <h1>Assalomu alaykum</h1>
    <h2>Taomlar:</h2>
    <ul>
        <?php foreach ($foots as $foot): ?>
            <li> <?php echo $foot ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>