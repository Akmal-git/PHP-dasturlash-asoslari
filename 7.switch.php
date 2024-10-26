<!-- 
Bayonot switchturli shartlarga asoslangan turli harakatlarni bajarish uchun ishlatiladi.

Bu shunday ishlaydi:

Ifoda bir marta baholanadi
Ifodaning qiymati har bir holatning qiymatlari bilan taqqoslanadi
Agar mos keladigan bo'lsa, tegishli kod bloki bajariladi
Kalit breakso'z switch blokidan chiqib ketadi
defaultMoslik bo'lmasa, kod bloki bajariladi
-->
<?php
$favcolor = "red";

switch ($favcolor) {
    case "red";
        echo "Your favorite color is red!";
        break;
    case "blue";
        echo "Your favorite color blue!";
        break;
    case "green";
        echo "Your favorite color green!";
        break;
    default:  
        echo "Your favorite color is neither red, blue, nor green!";
}
?>