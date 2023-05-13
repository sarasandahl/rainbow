//1. Om dig
Skriv ett program i PHP som
deklarerar variabler med data om ditt namn, ålder, hårfärg och kort bio
skriver ut dessa variabler i fyra p-taggar


<?php
    $name = "Sara";
    $age = "34";
    $haircolor = "råttfärgat";
    $bio = "Hej jag heter Sara, jag har inga husdjur men mycket studieskulder.";
?>

<p> <?= $name; ?> </p>
<p> <?= $age; ?> </p>
<p> <?= $haircolor; ?></p>
<p> <?= $bio; ?> </p>

<!-- ////////////////////////////////////////////////////////////////////////////// -->

<?php
    $info = array("Sara", "34", "råttfärgat", "Hej jag heter Sara, jag har inga husdjur men mycket studieskulder.");
    list($name, $age, $haircolor, $bio) = $info;
    echo "$name and $bio"
?>