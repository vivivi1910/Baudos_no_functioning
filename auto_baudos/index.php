<?php
include_once "DBConnector.php";

$obj = new DBConnector();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>


    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px black;
            padding: 10px;
            padding-right: auto;
            text-align: left;
        }
    </style>
</head>
<body>

<h1>Baudų sąrašas</h1>

<?php

echo "<table border='1'>
<tr>
<th>Numeris</th>
<th>Marke</th>
<th>Modelis</th>
<th>Metai</th>
<th>Leistinas max greitis</th>
<th>Fiksuotas greitis</th>
<th>Baudos dydis</th>
<th>Ar apmokejo</th>
<th>Veiksmai</th>
</tr>";


?>

<?php
$result = $obj->getGreiciu_lentele();
$obj->printAnyTable($result);
?>
<h3>Naujas įrašas</h3>

<form action="DBConnector.php" method="get">
    <table border="1">
        <tr>
            <td><input type="text" value="Numeris"></td>
            <td><input type="text" value="Markė"></td>
            <td><input type="text" value="Modelis"></td>
            <td><input type="text" value="Gamybos metai"></td>
            <td><input type="text" value="Leistinas greitis"></td>
            <td><input type="text" value="Išmatuotas greitis"></td>
            <td><input type="text" value="Bauda"></td>
            <td><input type="checkbox" value=""></td>
            <td><input type="submit" value="Pateikti"></td>

        </tr>

</form>

</body>
</html>