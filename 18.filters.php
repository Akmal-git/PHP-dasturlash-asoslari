<!-- 
Ma'lumotlarni tekshirish = Ma'lumotlar to'g'ri shaklda yoki yo'qligini aniqlang.
Ma'lumotlarni tozalash = Ma'lumotlardan noqonuniy belgilarni olib tashlang.

PHP filtrlari tashqi kirishni tekshirish va tozalash uchun ishlatiladi.

PHP filtri kengaytmasi foydalanuvchi kiritgan ma'lumotlarni tekshirish uchun zarur 
bo'lgan ko'plab funktsiyalarga ega va ma'lumotlarni tekshirishni oson va tezroq qilish 
uchun mo'ljallangan.

Funktsiyadan filter_list()PHP filtri kengaytmasi nimani taklif qilishini ro'yxatga olish 
uchun foydalanish mumkin:
-->

<?php
$srt = "<h1>Hello World</h1>";
$int = 123465789;

if (! filter_var($int, FILTER_VALIDATE_INT) === false) {
    echo "Integer is valid";
} else {
    echo "Integer is not valid";
}
?>