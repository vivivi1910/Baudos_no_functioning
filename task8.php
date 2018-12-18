<?php
include("fragments/menu.php");
//PHP gauna du kintamuosius: atstumas kilometrais ir sąnaudos litrais,
//apskaičiuoti kiek vidutiniškai sunaudojama kuro 100tui kilometrų pagal formulę:
//vidurkis = litrai * 100 / atstumo
//Kintamuosius iš $_REQUEST pasiimti vienoje funkcijoje, o skaičiavimą atlikti
//kitoje.

function vidurkis($atstumas, $sanaudos)
{
    return $sanaudos * 100 / $atstumas;
}

if (isset ($_REQUEST["atstumas"]) && isset ($_REQUEST["sanaudos"])) {
    $atstumas = $_REQUEST["atstumas"];
    $sanaudos = $_REQUEST["sanaudos"];

    $vidurkioRez = vidurkis($atstumas, $sanaudos);

    echo "Kai nuvaziuojama yra $atstumas ir sunaudojama yra $sanaudos vidutiniskai gaunasi: $vidurkioRez";

}
