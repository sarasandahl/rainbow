9. Vad är skillnaden mellan == och === i PHP?
Läs igenom https://www.php.net/types.comparisons


Svar:

Både == och === jämför värden av variabler på båda sidor med true or false. 

== jämför värdena godtycklig; där en int och en sträng kan passera som true om de innehåller samma. 
Exempel: 
<?php
    $aFew = 4;
    $some = "4";
?>
Blir true trots att de inte är exakt samma. 

=== jämför värdena exakt. Där tittar den inte bara om variablerna har samma värde utan även om det är samma typ. 
Exempel:
<?php
    $aFew = 4;
    $some = "4";
?>
Blir false. 
<?php
    $aFew = 4;
    $some = 4;
?>
Blir true.

Conclusion
The assignment equality = operator only assigns values.
The equality == does not assign values, but compares them without checking their data types.
The triple equals sign operator === won’t do assignment, but will check for equality of values and the data type.