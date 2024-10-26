 <!-- 
O'rnatilgan PHP funktsiyalaridan tashqari, o'zingizning funksiyalaringizni yaratishingiz mumkin.

Funktsiya - bu dasturda qayta-qayta ishlatilishi mumkin bo'lgan bayonotlar blokidir.
Sahifa yuklanganda funksiya avtomatik ravishda bajarilmaydi.
Funktsiya funksiyaga chaqiruv orqali bajariladi.
 
 -->

 <?php
    function niadirBajar() // Function nomlash ( argument yoziladi )
    {
        echo "Ekranga chiqarish";
    }
    niadirBajar(); // Function chaqirish
    // -----------------------------------------------------------------------------------
    function myMessage()
    {
        echo "Hello world!";
    };
    myMessage();
    // ------------------------------------------------------------------------------------
    // Ma'lumot argumentlar orqali funktsiyalarga uzatilishi mumkin. Argument xuddi o'zgaruvchiga o'xshaydi.
    function name($fname)
    {
        echo "$fname Refsnes.<br>";
    };
    name("Jani");
    name("Hege");
    name("Stale");
    name("Kai Jim");
    name("Borge");
    // -----------------------------------------------------------------------------
    // Quyidagi misolda ikkita argumentli funksiya mavjud ($fname, $year)
    function familyName($fname, $year)
    {
        echo "$fname Refsnes. Born in $year <br>";
    };
    familyName("Hege", "1975");
    familyName("Stale", "1978");
    familyName("Kai Jim", "1983");
    // -----------------------------------------------------------------------------
    // Agar funktsiyani setHeight()argumentlarsiz chaqirsak, u standart qiymatni argument sifatida oladi
    function setHeight($minheight = 50)
    {
        echo "The height is : $minheight <br>";
    }
    setHeight(350);
    setHeight(); // will use the default value of 50
    setHeight(135);
    setHeight(80);
    // ---------------------------------------------------------------------------
    // Funktsiyaga qiymat qaytarishiga ruxsat berish uchun return quyidagi bayonotdan foydalaning
    function sum($x, $y)
    {
        $z = $x + $y;
        return $z;
    }
    echo "5 + 10 = " . sum(5, 10) . "<br>";
    echo "7 + 13 = " . sum(7, 13) . "<br>";
    echo "2 + 4 = " . sum(2, 4);
    // ----------------------------------------------------------------------------
    // Qancha argument olishini bilmagan funksiya:
    function sumMyNumbers(...$x)
    {
        $n = 0;
        $len = count($x);
        for ($i = 0; $i < $len; $i++) {
            $n += $x[$i];
        }
        return $n;
    }
    $a = sumMyNumbers(5, 2, 6, 2, 7, 7);
    echo $a;
    // -----------------------------------------------------------------------------
    // Variadik argument oxirgi argument bo'lishi kerak:
    function myFamily($lastname, ...$firstname)
    {
        $txt = "";
        $len = count($firstname);
        for ($i = 0; $i < $len; $i++) {
            $txt = $txt . "Hi, $firstname[$i] $lastname.<br>";
        }
        return $txt;
    }

    $a = myFamily("Doe", "Jane", "John", "Joey");
    echo $a;
    // -----------------------------------------------------------------------------
    
    ?>



 <?php
    function ism_chiqarish($ism)
    {
        echo $ism;
    }
    ism_chiqarish("Akmal")
    ?>

 <?php
    $ismFamilya = "Egamberdiyev Akmal";
    var_dump($ismFamilya); // to'g'ridan to'g'ri ekranga chiqarib beradi
    die($ismFamilya)  // Bundan keyingi kod ishlamaydi
    ?>