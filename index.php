<!-- 
PHP global o'zgaruvchilari - Superglobals
PHPda oldindan belgilangan baʼzi oʻzgaruvchilar “supergloballar” boʻlib, ular qamrovidan qatʼi nazar, har doim foydalanish mumkin boʻladi – va siz ularga har qanday funksiya, sinf yoki fayldan maxsus hech narsa qilmasdan kirishingiz mumkin.

PHP superglobal o'zgaruvchilari quyidagilardir:
$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION 
-->

<?php
// $GLOBALS $xFunktsiya ichidagi global o'zgaruvchiga murojaat qiling :
$x = 75;
function myfunction1()
{
    echo $GLOBALS['x'];
}
myfunction1();

// $xFunktsiya ichida global deb belgilang :
$x = 75;
function myfunction2()
{
    global $x;
    echo $x;
}
myfunction2();

// Global o'zgaruvchilarni yarating
$y = 100;
echo $GLOBALS["x"];
echo $x;

// Funktsiya ichidan global o'zgaruvchi yarating va uni funktsiyadan tashqarida ishlating
function myfunction()
{
    $GLOBALS["x"] = 100;
}
myfunction();
echo $GLOBALS["x"];
echo $x;
// --------------------------------------------------------------------------------------
// $_SERVERPHP super global oʻzgaruvchisi boʻlib, sarlavhalar, yoʻllar va skript 
// joylashuvi haqidagi maʼlumotlarni saqlaydi.
echo $_SERVER['PHP_SELF'];
echo $_SERVER['SERVER_NAME'];
echo $_SERVER['HTTP_HOST'];
echo $_SERVER['HTTP_REFERER'];
echo $_SERVER['HTTP_USER_AGENT'];
echo $_SERVER['SCRIPT_NAME'];
// --------------------------------------------------------------------------------------
?>

<!-- $_REQUESTPHP super global oʻzgaruvchisi boʻlib, unda yuborilgan  -->
<!-- shakl maʼlumotlari va barcha cookie maʼlumotlari mavjud -->
<html>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_REQUEST['fname']);
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }
    }
    ?>
</body>

</html>

<?php

?>