<?php
include("fragments/menu.php");
//PHP gauna du kintamuosius: atstumas kilometrais ir sąnaudos litrais,
//apskaičiuoti kiek vidutiniškai sunaudojama kuro 100tui kilometrų pagal formulę:
//vidurkis = litrai * 100 / atstumo

if (isset ($_REQUEST["atstumas"]) && isset ($_REQUEST["sanaudos"])) {
    $atstumas = $_REQUEST["atstumas"];
    $sanaudos = $_REQUEST["sanaudos"];

    $vidurkis = $sanaudos * 100 / $atstumas;

    echo "Kai atstumas yra $atstumas ir sanaudos yra $sanaudos gaunasi $vidurkis";
}

?>