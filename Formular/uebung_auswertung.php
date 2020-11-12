<?php
echo "<p>Folgende Daten wurden übermittelt: </p> ";
echo "<p> Vorname: " . $_POST["vorname"] . "<br>" . strlen(2);
echo "<p> Nachname: " . $_POST["nachname"] . "<br>" . strlen(2);
echo "<p> Wohnort: " . $_POST["ort"] . "<br>";
echo "<p> Wohnung: " . $_POST["wohnen"] . "<br>";
echo "<p> TV Sendung: " . $_POST["Sendung"] . "<br>";

if (!empty($_POST["memo"])) {
    echo "<p> Nachricht: " . $_POST["memo"] . "<br>";
} else {
    echo "Nachricht nicht Vorhanden";
}
?>