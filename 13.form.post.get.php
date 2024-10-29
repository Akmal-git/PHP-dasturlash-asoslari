<?php
// Request - so'rov
// POST - Request so'rov bilan yuboradi
// GET - URL orgali yuboradi

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
}
?>

<!DOCTYPE html>
<html lang="uz">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML5 Namuna</title>
</head>

<body>
    <form method="POST" action="">
        <h3>Isminigizni kiriting</h3>
        <input type="text" name="name" placeholder="Ism kiriting" />
        <h3>Familiya kiriting</h3>
        <input type="text" name="surname" placeholder="Familya kiriting" />
        <br /> <br />
        <button type="submit">Yuborish</button>
    </form>

    <div>
        <h3>Name:<?php echo $name ?? "" ?></h3>
        <h3>Surname:<?php echo $surname ?? "" ?></h3>
    </div>
</body>

</html>