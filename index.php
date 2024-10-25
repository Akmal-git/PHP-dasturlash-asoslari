<!-- 
 PHP operatorlari
Operatorlar o'zgaruvchilar va qiymatlar ustida amallarni bajarish uchun ishlatiladi

PHP operatorlarni quyidagi guruhlarga ajratadi:
1.Arithmetic operators    =>   Arifmetik operatorlar
2.Assignment operators    =>   Belgilash operatorlari
3.Comparison operators    =>   Taqqoslash operatorlari
4.Increment/Decrement operators     =>   Oshirish/kamaytirish operatorlari
5.Logical operators       => Mantiqiy operatorlar
6.String operators        =>  String operatorlari
7.Array operators         => Array operatorlari
8.Conditional assignment operators  =>  Shartli belgilash operatorlari
-->

<?php
// Arithmetic operators
$x = 10;
$y = 20;
$result1 = $y + $x;  // qo'shish
$result2 = $y - $x;  // ayirish
$result3 = $y / $x;  // bo'lish
$result4 = $y * $x;  // ko'paytirish
$result5 = $y ** $x; // darajaga ortirish
$result6 = $y % $x;  // bo'lgandagi qoldiqni topish

echo $result1;
echo "<br>";
echo $result2;
echo "<br>";
echo $result3;
echo "<br>";
echo $result4;
echo "<br>";
echo $result5;
echo "<br>";
echo $result6;
?>

<?php
// Taqqoslash operatorlari
// ===  $x === $y   Agar $x $y ga teng boʻlsa, true qiymatini qaytaradi
// !=   $x != $y    Agar $x $y ga teng boʻlmasa, true qiymatini qaytaradi 
// <>  	$x <> $y    Agar $x $y ga teng boʻlmasa, true qiymatini qaytaradi
// !==  $x !== $y   Agar $x $y ga teng boʻlmasa yoki ular bir xil turdagi boʻlmasa, true qiymatini qaytaradi
//  >   $x > $y     Agar $x $y dan katta bo'lsa, true qiymatini qaytaradi
//  <   $x < $y     Agar $x $y dan kichik bo'lsa, true qiymatini qaytaradi
//  >=  $x >= $y    Agar $x $y dan katta yoki teng bo'lsa, true qiymatini qaytaradi
//  <=  $x <= $y    $x $y dan kichik yoki teng bo'lsa, true qiymatini qaytaradi

?>