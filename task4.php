<html>
<head>
</head>
<body>

<p>PHP gauna du skaičius ir atspausdina jų skirtumą bei sumą, suma ir skirtumas
    atskirose funkcijose</p>

<?php
include("fragments/menu.php");


function suma($pirmas, $antras) {
    echo "$pirmas ir $antras suma yra: " . ($pirmas + $antras);
}

function skirtumas($pirmas, $antras) {
    echo "$pirmas ir $antras skirtumas yra: " . ($pirmas - $antras);
}

if (isset ($_REQUEST["a"]) && isset($_REQUEST["b"])) {
    $a = $_REQUEST["a"];
    $b = $_REQUEST["b"];

    suma($a, $b) ;
    echo "<br>";
    skirtumas($a, $b);
}


/*function skaiciuokSuma($a, $b) {
    echo "suma". ($a+$b);
}
skaiciuokSuma ("1", "13");

function skaiciuokSkirtuma($a, $b) {
    echo "skirtumas". ($a-$b);
}
skaiciuokSkirtuma ("1", "13");*/



?>
</body>
</html>



