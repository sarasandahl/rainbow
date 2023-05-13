2. Öva med array
Skriv ett program i PHP som skriver ut alla element från en array av strängar. 
Arrayen ska kunna vara hur lång eller kort som helst och programmet ska fungera ändå. 
Utskriften ska vara snygg HTML som formatterar alla strängar som en numrerad punktlista.

<?php
    $birthday = array("tårta", "bullar", "bubbelvatten", "saft", "kakor", "frukt");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birthday Party</title>
</head>
<body>

    <ol>
        <?php
            foreach($birthday as $b) {
                echo '<li>'.$b.'</li>';
            }
        ?>
    </ol>

</body>
</html>