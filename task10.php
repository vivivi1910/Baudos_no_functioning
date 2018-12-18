<html>
<head>
    <?php
    include("fragments/styles.php");
    ?>
</head>
<body>

<?php
include("fragments/menu.php");
//Pasinaudojant forma parašyti skaičiuotuvą kuris atlieką dviejų skaičių sumą,
//skirtumą, sandaugą, dalybą.

$a = isset($_REQUEST["a"]) ? $_REQUEST["a"] : "";
$b = isset($_REQUEST["b"]) ? $_REQUEST["b"] : "";
?>

<form method="get" action="task10.php">

    <input type="text" name="a" placeholder="Iveskite a" value="<?php echo $a; ?>">
    <input type="text" name="b" placeholder="Iveskite b" value="<?php echo $b; ?>"><br>

    <input type="radio" name="action" value="+">+
    <input type="radio" name="action" value="-">-<br>
    <input type="radio" name="action" value="*">*
    <input type="radio" name="action" value="/">/<br>

    <input type="submit" value="skaiciuok">
</form>
<atsakymas>
    <?php
    if (isset($_REQUEST["a"]) && isset($_REQUEST["b"]) && isset($_REQUEST["action"])) {
        $a = $_REQUEST["a"];
        $b = $_REQUEST["b"];
        $action = $_REQUEST["action"];
        switch ($action) {
            case "+":
                echo $a + $b;
                break;
        }
        switch ($action) {
            case "-":
                echo $a - $b;
                break;
        }
        switch ($action) {
            case "*":
                echo $a * $b;
                break;
        }
        switch ($action) {
            case "/":
                echo $a / $b;
                break;
        }

    }
    ?>
</atsakymas>

</body>
</html>