<!-- 
Ko'pincha kod yozganingizda, siz turli xil shartlar uchun turli xil amallarni bajarishni 
xohlaysiz. Buni amalga oshirish uchun kodingizda shartli iboralardan foydalanishingiz mumkin.

PHP da bizda quyidagi shartli iboralar mavjud:

if bayonot - agar bitta shart to'g'ri bo'lsa, ba'zi kodlarni bajaradi
if...else bayonot - agar shart to'g'ri bo'lsa, ba'zi kodni va bu shart noto'g'ri bo'lsa, boshqa kodni bajaradi
if...elseif...else bayonot - ikkitadan ortiq shartlar uchun turli xil kodlarni bajaradi
switch bayonot - bajariladigan kodning ko'p bloklaridan birini tanlaydi

if Agar bitta shart to'g'ri bo'lsa, bayonot ba'zi kodlarni bajaradi 

-->

<?php
$x = 10;
$y = 15;

if ($x == 10) {
    echo "X = 10";
} elseif ($x > $y) {
    echo "X katta emas Y dan";
} elseif ($x < $y) {
    echo "Y katta X dan";
} else { 
    echo " X teng emas 10 ga";
}
?> 