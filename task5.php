<?php
include("fragments/menu.php");
//5. PHP gauna du kintamuosius: ūgis metrais ir svoris kilogramais išvesti kūno
//masės indeksą pagal formulę
//KMI = svoris/(ugis*ugis)


if (isset ($_REQUEST["ugis"]) && isset ($_REQUEST["svoris"])) {
    $ugis = $_REQUEST["ugis"];
    $svoris = $_REQUEST["svoris"];

    $kmi = $svoris / pow($ugis, 2 );

    echo "Kai ugis yra $ugis ir svoris yra $svoris KMI gaunasi: $kmi";
}

?>