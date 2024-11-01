<!-- 
Seesions - bu bir nechta sahifalarda foydalanish uchun ma'lumotni (o'zgaruvchilarda) saqlash usuli.
Cookie-fayllardan farqli o'laroq, ma'lumotlar foydalanuvchi kompyuterida saqlanmaydi.
Funktsiya bilan sessiya boshlanadi session_start().
Sessiya oʻzgaruvchilari PHP global oʻzgaruvchisi bilan oʻrnatiladi: $_SESSION.
Barcha global seans o'zgaruvchilarini olib tashlash va sessiyani yo'q qilish uchun session_unset()
va dan foydalaning session_destroy():

Bu asosan Login va Registrlarda ishkatiladi
-->

<?php

session_start();
$_SESSION['username'] = "Akmal";
var_dump($_SESSION);
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
        <h1>Foydalanuvchi: <?= $_SESSION['username'] ?></h1>
    </div>
</body>

</html>