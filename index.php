<!-- 
 PHP ma'lumotlar turlari
O'zgaruvchilar har xil turdagi ma'lumotlarni saqlashi mumkin 
va har xil ma'lumotlar turlari har xil ishlarni bajarishi mumkin.

Funktsiya var_dump()ma'lumotlar turini va qiymatini qaytaradi:

PHP quyidagi ma'lumotlar turlarini qo'llab-quvvatlaydi:
1.String
2.Integer
3.Float (floating point numbers - also called double)
4.Boolean
5.Array
6.Object
7.NULL
8.Resource
-->

<?php
// Satr tirnoq ichidagi har qanday matn bo'lishi mumkin. Siz bitta yoki ikkita tirnoqdan foydalanishingiz mumkin:
$string = "Hello World";

$integer = 123465789;  //Butun sonli ma'lumotlar turi

$float = 12.23;   //kasrli nuqta yoki eksponensial shakldagi raqam

$boolean = true; //Mantiqiy ikki mumkin bo'lgan holatni ifodalaydi: TRUE yoki FALSE ,true = 1; false = 0 

// Array bitta o'zgaruvchida bir nechta qiymatlarni saqlaydi
$array = ['Akmal', 'Egamberdiyev', 2000, 24, 50.35, true, false];
$array2 = array('Akmal', 'Egamberdiyev', 2000, 24, 50.35, true, false);
var_dump($array);  // Array ekranga chiqarish
print_r($array2);  // Array ekranga chiqarish

// $object  PHP ob'ekti
// Sinflar va ob'ektlar ob'ektga yo'naltirilgan dasturlashning ikkita asosiy jihati hisoblanadi.
// Sinf ob'ektlar uchun shablon, ob'ekt esa sinfning namunasidir.
// Alohida ob'ektlar yaratilganda, ular sinfdan barcha xususiyatlar va xatti-harakatlarni meros qilib oladi, lekin har bir ob'ekt xususiyatlar uchun turli qiymatlarga ega bo'ladi.
// Faraz qilaylik, bizda model, rang va boshqalar kabi xususiyatlarga ega bo'lishi mumkin bo'lgan nomli sinf bor. Bu xususiyatlarning qiymatlarini saqlash uchun , va hokazo Carkabi o'zgaruvchilarni belgilashimiz mumkin .$model$color
// Alohida ob'ektlar (Volvo, BMW, Toyota va boshqalar) yaratilganda, ular sinfdan barcha xususiyatlar va xatti-harakatlarni meros qilib oladi, lekin har bir ob'ekt xususiyatlar uchun turli qiymatlarga ega bo'ladi.
// Agar siz funktsiya yaratsangiz __construct(), sinfdan ob'ekt yaratganingizda PHP avtomatik ravishda ushbu funktsiyani chaqiradi.
class Car
{
    public $color;
    public $model;
    public function __construct($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
    }
    public function message()
    {
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
}
$myCar = new Car("red", "Volvo");
var_dump($myCar);

$null = null;
$resource = "haqiqiy data type emas"
?>