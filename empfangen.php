<?php

$daten = json_decode(file_get_contents("php://input"), true);

if ($daten) {
    echo "Empfangen: " . $daten["name"];
} else {
    echo "Keine Daten erhalten";
}

?>
