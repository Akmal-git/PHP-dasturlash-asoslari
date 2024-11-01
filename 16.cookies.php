<!-- Browzreimizda saqlanadigan fayillar 
Cookie ko'pincha foydalanuvchini aniqlash uchun ishlatiladi.
Cookie - bu server foydalanuvchi kompyuteriga joylashtirgan kichik fayl. 
Har safar bir xil kompyuter brauzerli sahifani so'raganda, u cookie-faylni ham yuboradi.
PHP yordamida siz ham cookie qiymatlarini yaratishingiz va ham olishingiz mumkin. 
-->

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


<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>

<body>

    <?php
    if (!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }
    ?>

</body>

</html>