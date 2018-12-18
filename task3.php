<?php
include("fragments/menu.php");

$a = $_REQUEST["a"];
$b = $_REQUEST["b"];

echo "suma" . ($a + $b) . "<br>";
echo "skirtumas" . ($a - $b);

?>

//PHP gauna du skaičius ir atspausdina jų skirtumą bei sumą


