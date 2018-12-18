task1.php<html>
<head>
</head>
<body>


<?php

include("../fragments/menu2.php");

?>

<form action="task2.php" method="get">
    <input type="text" name="sk">
    <input type="submit">

</form>

<?php
if (isset($_REQUEST["sk"])) {
    echo "<atsakymas>";

    $skaicius = $_REQUEST["sk"];
     if($skaicius % 3 == 0) {
        echo "$skaicius dalinasi is 3";
    }
    if($skaicius % 5 == 0) {
        echo "$skaicius dalinasi is 5";
    }
    if($skaicius % 7 == 0) {
        echo "$skaicius dalinasi is 7";

    }

    echo "</atsakymas>";

} ?>


</body>
</html>

