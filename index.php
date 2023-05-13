6. Rymdvarelser 👽
Skriv ett program som fyller en array med rymdvarelser. Varje rymdvarelse är en associativ array som berättar antal ögon, antal armar, ålder, färg och namn. 
Alla dessa värden är slumpade. Antingen från ett numeriskt intervall eller från en array av värden.
Namn är alltid dubbelnamn där första delen av namnet slumpas ur en array och andra delen av namnet slumpas från en annan array.
När arrayen av rymdvarelser är fylld så skriver programmet ut den snyggt formaterad med HTML.
Man ska kunna ändra en siffra i koden på ett ställe så skriver programmet ut så många rymdvarelser.

<?php
    $spaceman = [
        [
            "Name" => "",
            "Age" => "",
            "Eyes" => "",  
            "Arms" => "",
            "Color" => "",
        ],
    ];

    $color = array("pink", "yellow", "blue", "purple", "green", "brown", "black", "white", "orange");

    $name = array("Lasse", "Måntiara", "x2000", "Susselulle", "jd83oos", "Lolz");

    $lastname = array("Jupiter", "Månesson", "x2000", "kdsjfoiuth23jiwefj", "Lidfors", "29429103849302");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>