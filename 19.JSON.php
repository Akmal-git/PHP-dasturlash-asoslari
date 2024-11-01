<!--  
JSON JavaScript Object Notation degan ma'noni anglatadi va ma'lumotlarni 
saqlash va almashish uchun sintaksisdir.

JSON formati matnga asoslangan format bo'lgani uchun uni serverga va serverdan 
osongina yuborish va istalgan dasturlash tili tomonidan ma'lumotlar formati sifatida 
foydalanish mumkin.

json_encode() => funksiyasi qiymatni JSON formatiga kodlash uchun ishlatiladi
json_decode() => funksiyasi JSON obyektini PHP obyektiga yoki assotsiativ massivga dekodlash uchun ishlatiladi
-->

<?php
$ageJson = array("Akmal" => 24, "Alisher" => 30, "Bobur" => 28,);
echo json_encode($age);
$ageArray = '{"Akmal":24,"Alisher":30,"Bobur":28}';
var_dump(json_decode($ageArray));
?>