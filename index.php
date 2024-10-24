<!-- Mening php birinchi kodim -->
<!-- php -S localhost:8000  =>  ekranga chiqarish uchun terminalga yoziladigan kod -->


<?php
$name = " Akmal";
$surname = ' Egamberdiyev';
$age =  24;
?>

<!DOCTYPE html>
<html>

<body>

    <?php
    echo "My first PHP script! ";
    echo '<br>';
    echo $surname .  $name . " " . $age . 'yoshda';
    ?>

</body>

</html>