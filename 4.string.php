<!-- 
PHP-dagi satrlar qo'sh tirnoq yoki bitta tirnoq bilan o'ralgan

Eslatma PHPda qo'sh tirnoq va bitta tirnoq o'rtasida katta farq bor.
Ikkita qo'shtirnoq maxsus belgilarni qayta ishlaydi, bitta qo'shtirnoqda ishlamaydi.




  -->

  <?php
//Stringlarni o'zgartirish
$gap = "Assalomu alaykum  123";

echo strlen($gap); // funksiyasi satr uzunligini qaytaradi
echo "<br>";
echo str_replace('123', 'almashtirish', $gap); //“123” matni “alamshtirish” so‘zi bilan almashtirilsin
echo "<br>";
echo str_word_count($gap); // funktsiyasi satrdagi so'zlar sonini hisoblaydi
echo "<br>";
echo strpos($gap, "alaykum"); //funktsiyasi satr ichida ma'lum bir matnni qidiradi
echo "<br>";
echo strtoupper($gap); //satrni katta harf bilan qaytaradi
echo "<br>";
echo strtolower($gap); //qatorni kichik harf bilan qaytaradi
echo "<br>";
echo strrev($gap); //stringni teskari aylantiraadi
echo "<br>";
echo trim($gap); //Boshidan yoki oxiridagi bo'sh joyni olib tashlaydi 
echo "<br>";
$array = explode(" ", $gap); // stringni arrayga aylantirish
print_r($array);
echo "<br>"
?>

<?php
//Stringlarni birlashtirish

$x = "Hello";
$y = "World";

$z = $x . " " . $y;
echo $z;
echo "<br>";

$b = "$x $y";
echo $b;
echo "<br>"
?>

<?php
// stringlarni  kesish
$soz = "hello world!";
echo substr($soz, 6, 5); //Bo'limni 6 indeksdan boshlang va tilimni 5 pozitsiyadan keyin tugating
echo "<br>";

echo substr($gap, 6); //Bo'limni 6-indeksdan boshlang va oxirigacha boring
echo "<br>";

echo substr($gap, -5, 3); //Dunyodagi "o" dan boshlab 3 ta belgini oling (indeks -5)
echo "<br>";

echo substr($gap, 5, -3); //Satr oxiridan boshlab qancha belgi qoldirilishini belgilash uchun salbiy uzunlikdan foydalaning
echo "<br>"
?>

<?php
$sonlar = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
echo max($sonlar);
echo "<br>";
echo min($sonlar);
echo "<br>";
echo abs(-4.5); // musbat son qaytaradi
echo "<br>";
echo sqrt(64); // ildiz chiqarib beradi
echo "<br>";
echo rand(); // tasadifiy raqam chiqarib beradi
echo "<br>";

define("Ozgaruvchi", "Akmal");  // constant  o'zgarmas
echo Ozgaruvchi
?>