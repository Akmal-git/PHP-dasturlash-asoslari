Mening php birinchi kodim
<!-- php -S localhost:8000  =>  ekranga chiqarish uchun terminalga yoziladigan kod -->

<?php
// Bu yerda PHP kodlar yoziladi
?>

<!-- O'zgaruvchilarning yozilishi -->
<?php
$name = 'Akmal';
$surname = "Egamberdiyev";
?>

<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML5 Namuna</title>
</head>

<body>
    <header>
        <?php echo $surname ?> <?php echo $name ?>
    </header>

    <nav>
        <ul>
            <li><a href="#home">Bosh sahifa</a></li>
            <li><a href="#about">Biz haqimizda</a></li>
            <li><a href="#contact">Aloqa</a></li>
        </ul>
    </nav>

    <article>
        <h2>Biz haqimizda</h2>
        <p>Bu yerda HTML5 haqida ma'lumotlar beriladi.</p>
    </article>

    <footer>
        <p>Huquqlar himoyalangan &copy; 2023</p>
    </footer>
</body>

</html>