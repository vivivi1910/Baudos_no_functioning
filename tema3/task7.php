<html>
<head>
    <?php
    include("../fragments/styles.php");
    ?>
</head>
<body>
<?php
include("../fragments/menu3.php");
?>
<p>PHP gauna du kintamuosius: atstumas kilometrais ir sąnaudos litrais,
    //apskaičiuoti kiek vidutiniškai sunaudojama kuro 100tui kilometrų pagal formulę:
    //vidurkis = litrai * 100 / atstumo

<atsakymas>
    <?php
    class Task7{
        private $atstumas;
        private $sunaudojo;
        private $vidurkis;

        //susirenkame kintamuosius
        public function setValues($value1, $value2) {
            $this->atstumas=$value1;
            $this->sunaudojo=$value2;
            $this->calcVidurki();

        }

        private function calcVidurki() {
            $this->vidurkis = $this->sunaudojo * 100 / $this->atstumas;
        }

        public function showResults()
        {
            echo "Kai nuvaziuotas atstumas yra  $this->atstumas ir sunaudojo kuro $this->sunaudojo tada vidutines sanaudos yra: $this->vidurkis<br>";
        }

    }
    if (isset($_REQUEST["atstumas"]) && isset($_REQUEST["sunaudojo"])) {
        $atstumas = $_REQUEST["atstumas"];
        $sunaudojo = $_REQUEST["sunaudojo"];

        $obj = new Task7();
        $obj->setValues($atstumas,$sunaudojo);
        $obj->showResults();

    }
    ?>
</atsakymas>
</body>
</html>