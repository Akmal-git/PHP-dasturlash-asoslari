<!--  
Boshqa dasturlash tillaridan farqli o'laroq, PHP da o'zgaruvchini e'lon
qilish buyrug'i yo'q. Siz unga birinchi marta qiymat berganingizda yaratiladi

 PHP o'zgaruvchilari
O'zgaruvchining qisqa nomi (kabi $xva $y) yoki ko'proq 
tavsiflovchi nomi ( $age, $carname, $total_volume) bo'lishi mumkin.

PHP o'zgaruvchilari uchun qoidalar:

O'zgaruvchi belgidan boshlanadi $, keyin o'zgaruvchining nomi
O'zgaruvchi nomi harf yoki pastki chiziq belgisi bilan boshlanishi kerak
O'zgaruvchi nomi raqam bilan boshlanmaydi
Oʻzgaruvchi nomi faqat alfa-raqamli belgilar va pastki chiziqdan iborat boʻlishi mumkin (Az, 0-9 va _ )
O'zgaruvchilar nomlari katta-kichik harflarga sezgir ( $ageva $AGEikki xil o'zgaruvchidir)
-->

<?php
$name = "Akmal";
$surname = 'Egamberdiyev';
$age = 24;
?>

<!DOCTYPE html>
<html>

<body>

    <?php
    echo "My first PHP script!";
    echo $surname . $name . $age . 'yoshda';
    ?>

</body>

</html>

<?php

function qoshish() {
    global $name;   // functioni tashqarisidagi o'zgaruvchini ishlatish uchun
    echo $name;
}
?>