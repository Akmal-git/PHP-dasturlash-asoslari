<!-- 
echova printko'proq yoki kamroq bir xil. Ularning ikkalasi 
ham ma'lumotlarni ekranga chiqarish uchun ishlatiladi.

Farqlar kichik: echo qaytarish qiymati yo'q, print qaytarish qiymati esa 1 ga teng, 
shuning uchun uni ifodalarda ishlatish mumkin. echo bir nechta parametrlarni qabul 
qilishi mumkin (garchi bunday foydalanish kamdan-kam hollarda bo'lsa ham), print bitta 
argumentni olishi mumkin. echoga nisbatan tezroq print 
-->

<?php
echo "Hello";
echo ('World'); // qavish ichida yozilshi ham mumkin

echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";

print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";

$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";

echo "<h2>$txt1</h2>";
echo "<p>Study PHP at $txt2</p>";

print "<h2>$txt1</h2>";
print "<p>Study PHP at $txt2</p>";
?>