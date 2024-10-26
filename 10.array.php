<!-- 
Array bitta o'zgaruvchida bir nechta qiymatlarni saqlaydi:
Array - bu bitta nom ostida ko'plab qiymatlarni saqlashi mumkin bo'lgan maxsus 
o'zgaruvchidir va siz indeks raqami yoki nomiga murojaat qilish orqali qiymatlarga 
kirishingiz mumkin. 

PHP da arraylarning uch turi mavjud:
Indekslangan massivlar - sonli indeksli massivlar
Assotsiativ massivlar - nomli kalitlarga ega massivlar
Ko'p o'lchovli massivlar - bir yoki bir nechta massivni o'z ichiga olgan massivlar
-->

<?php
// To'rt xil turdagi ma'lumotlarning massiv elementlari:
$myArr = array("Volvo", 15, ["apples", "bananas"],);

// Massivda nechta element bor $cars
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
$cars = ["Volvo", "BMW", "Toyota"];
var_dump($cars);

// Massiv elementiga kirish uchun indeks raqamiga murojaat qilishingiz mumkin.
$cars = array("Volvo", "BMW", "Toyota");
echo $cars[0];

// Ikkinchi elementning qiymatini o'zgartiring:
$cars = array("Volvo", "BMW", "Toyota");
$cars[1] = "Ford";
var_dump($cars);
?>