<?php
include("fragments/menu.php");
//PHP gauna du kintamuosius: ūgis metrais ir svoris kilogramais, išvesti kūno
//masės indeksą pagal formulę
//KMI = svoris/(ugis*ugis)
//KMI skaičiavimas turi būti atskiroje funkcijoje

function kmiSk($ugis, $svoris)
{

    return $svoris / pow($ugis, 2);
}

if (isset ($_REQUEST["ugis"]) && isset ($_REQUEST["svoris"])) {
    $ugis = $_REQUEST["ugis"];
    $svoris = $_REQUEST["svoris"];

    $kmi = kmiSK($ugis, $svoris);

    echo "Kai ugis yra $ugis ir svoris yra $svoris KMI gaunasi: $kmi";

}

?>
