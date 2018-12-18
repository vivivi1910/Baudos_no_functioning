<?php
include("fragments/menu.php");
//PHP gauna du kintamuosius: atstumas kilometrais ir sąnaudos litrais,
//apskaičiuoti kiek vidutiniškai sunaudojama kuro 100tui kilometrų pagal formulę:
//vidurkis = litrai * 100 / atstumo
//Kintamuosius iš $_REQUEST pasiimti vienoje funkcijoje, o skaičiavimą atlikti
//kitoje. Abi funkcijas parašyti be parametrų ir pasidėti reikšmes į globalius
//kintamuosius, naudoti $GLOBALS

function nuskaitymas()
{
    if (isset ($_REQUEST["atstumas"]) && isset ($_REQUEST["sanaudos"])) {
        $GLOBALS ["atstumas"] = $_REQUEST["atstumas"];
        $GLOBALS ["sanaudos"] = $_REQUEST["sanaudos"];
        vidurkis();
    }
}

function vidurkis()
{

    $vidurkioRez = $GLOBALS ["sanaudos"] * 100 / $GLOBALS ["atstumas"];

    echo "Kai nuvaziuojama yra " . $GLOBALS ["atstumas"] . " ir sunaudojama " . $GLOBALS ["sanaudos"] . " vidutiniskai gaunasi: $vidurkioRez";
}

nuskaitymas();

?>