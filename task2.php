<?php

include("fragments/menu.php");
$zodis = $_REQUEST["zodis"];

$ilgis = strlen($zodis);

echo "$zodis turi $ilgis simboliu";

?>

//2. Parašyti kodą kuris gauna žodį per parametrus atspausdintų kiek simbolių yra
//tame žodyje.
