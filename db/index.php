<?php
include_once "DBConnector.php";

$obj = new DBConnector();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h1>Uzduotis 1_6</h1>
<?php
$result = $obj->getUzduotis1_6();
$obj->printAnyTable($result);
?>
<hr width="100%">

<h1>Uzduotis 1_7</h1>
<?php
$result = $obj->getUzduotis1_7();
$obj->printAnyTable($result);
?>
<hr width="100%">

<h1>Uzduotis 1_8</h1>
<?php
$result = $obj->getUzduotis1_8();
$obj->printAnyTable($result);
?>
<hr width="100%">

<h1>Uzduotis 1_9</h1>
<?php
$result = $obj->getUzduotis1_9();
$obj->printAnyTable($result);
?>
<hr width="100%">

<h1>Uzduotis 1_10</h1>
<?php
$result = $obj->getUzduotis1_10();
$obj->printAnyTable($result);
?>
<hr width="100%">

<h1>Uzduotis 1_11</h1>
<?php
$result = $obj->getUzduotis1_11();
$obj->printAnyTable($result);
?>
<hr width="100%">

<h1>Uzduotis 1_12</h1>
<?php
$result = $obj->getUzduotis1_12();
$obj->printAnyTable($result);
?>
<hr width="100%">

<h1>Uzduotis 1_13</h1>
<?php
$result = $obj->getUzduotis1_13();
$obj->printAnyTable($result);
?>
<hr width="100%">

<h1>Uzduotis 1_14</h1>
<?php
echo "Is update success: " . $obj->getUzduotis1_14();

?>
<hr width="100%">

<h1>Uzduotis 1_15</h1>
<?php
$result = $obj->getUzduotis1_15();
$obj->printAnyTable($result);
?>
<hr width="100%">

</body>
</html>