<!-- 
PHP sikllari
Ko'pincha kod yozganingizda, siz bir xil kod blokining ma'lum bir necha marta qayta-qayta 
ishlashini xohlaysiz. Shunday qilib, skriptga bir nechta deyarli teng kod qatorlarini 
qo'shish o'rniga, biz tsikllardan foydalanishimiz mumkin.

Ma'lum bir shart to'g'ri bo'lsa, bir xil kod blokini qayta-qayta bajarish 
uchun tsikllardan foydalaniladi.

PHP da bizda quyidagi sikl turlari mavjud:
while- belgilangan shart to'g'ri bo'lsa, kod bloki bo'ylab aylanish
do...while- kod blokini bir marta aylantiradi, so'ngra belgilangan shart rost bo'lsa, 
tsiklni takrorlaydi
for- kod blokini ma'lum bir necha marta aylantiradi
foreach- massivdagi har bir element uchun kod bloki bo'ylab aylanish 
-->

<!-- 
1.while
2.do...while
3.for
4.forich
-->
<?php
// ---------------------------------------------------------------------------------
//             while
$i = 1;
while ($i < 6) {
    echo $i++ . "<br>";
};
//3 bo'lganda tsiklni to'xtating $i
while ($i < 6) {
    if ($i == 4) break;
    echo $i . "<br>";
    $i++;
};
// ---------------------------------------------------------------------------------
//             do...while
do {
    echo $i . "<br>";
    $i++;
} while ($i < 10);
// 3 bo'lganda tsiklni to'xtating $i
do {
    if ($i == 3) break;
    echo $i . "<br>";
    $i++;
} while ($i < 6);
// continue  belgilangan qiymatni tashlab ketadi
do {
    $i++;
    if ($i == 3) continue;
    echo $i . "<br>";
} while ($i < 6);
// ---------------------------------------------------------------------------------
//             for
// 0 dan 10 gacha raqamlarni chop eting:
for ($number = 0; $number < 10; $number++) {
    echo "The number is $number <br>";
};
// 3 bo'lganda tsiklni to'xtating $x
for ($n = 0; $n <= 10; $n++) {
    if ($n == 3) break;
    echo "The number is $n <br>";
};
// continue  belgilangan qiymatni tashlab ketadi
for ($x = 0; $x <= 10; $x++) {
    if ($x == 3) continue;
    echo "The number is: $x <br>";
};
// Ushbu misol 100 ga o'nlab sanaladi:
for ($x = 0; $x <= 100; $x += 10) {
    echo "The number is: $x <br>";  
}
// ---------------------------------------------------------------------------------
//             forich 
// Indekslangan massivning elementlari bo'ylab aylanish
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $x) {
    echo "$x <br>";
}
// Massivdagi kalit va qiymatni ham chop eting $members
$members = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
foreach ($members as $x => $y) {
    echo "$x : $y <br>";
}
// Ob'ektning xususiyat nomlari va qiymatlarini chop eting $myCar
class Car
{
    public $color;
    public $model;
    public function __construct($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
    }
}
$myCar = new Car("red", "Volvo");
foreach ($myCar as $x => $y) {
    echo "$x: $y <br>";
}
// Agar "ko'k" bo'lsa, tsiklni to'xtating $x
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $x) {
    if ($x == "blue") break;
    echo "$x <br>";
}
// Ekranga blue rangini chiqarmay tashlab ketadi
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $x) {  
    if ($x == "blue") continue; 
    echo "$x <br>";
}
// $colors dagi blue rangni o'rniga pink ga o'zgartirish & belgi ishlatilishi shart
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as &$x) {
    if ($x == "blue") $x = "pink";
}
var_dump($colors);
// Indekslangan massivning elementlari bo'ylab aylanish foreachbilan ham yozish mumkin endforeach
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $x) :
    echo "$x <br>";
endforeach;
?> 