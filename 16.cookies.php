<!-- Browzreimizda saqlanadigan fayillar -->

<?php
setcookie("nomi", "qiymmati");
setcookie("test", "Bu uning qiymati");
setcookie("user_name", "Akmal", time() + (5));  // 5 sekundan keyin o'chib ketish vaqti
// COOKIE superglobals  o'zgaruvchi
var_dump($_COOKIE)
?>

<!DOCTYPE html>
<html lang="uz">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML5 Namuna</title>
</head>

<body>
    <div>
        <h1><?php echo $_COOKIE['user_name'] ?></h1>
    </div>
</body>

</html>