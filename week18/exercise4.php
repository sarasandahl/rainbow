4. Tabell 📈
Skapa en multidimensionell array (dvs en array som innehåller arrayer). 
Se denna array som en tabell dvs det finns rader och kolumner, dessa bildar celler som har data och kolumner har rubriker. 
Skriv ett program som skriver ut denna array som en table i HTML.
Utmaning: kan vi bygga några funktioner som hjälper detta program?

<?php
$breakfast = array(
  array("Yoghurt","Porrage","Milk"),
  array("Hot Dog","Sandwich","Soup"),
  array("Chicken","Beef","Sausage"),
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Column With Food</title>
</head>
<body>

    <main>
        <table>
            <tr>
                <th>Breakfast</th>
                <th>Lunch</th>
                <th>Dinner</th>
            </tr>
            <tr>
                <td><?= $breakfast[0][0]; ?></td>
                <td><?= $breakfast[1][0]; ?></td>
                <td><?= $breakfast[2][0]; ?></td>
            </tr>
            <tr>
                <td><?= $breakfast[0][1]; ?></td>
                <td><?= $breakfast[1][1]; ?></td>
                <td><?= $breakfast[2][1]; ?></td>
            </tr>
            <tr>
                <td><?= $breakfast[0][2]; ?></td>
                <td><?= $breakfast[1][2]; ?></td>
                <td><?= $breakfast[2][2]; ?></td>
            </tr>
        </table>
    </main>

</body>
</html>

<!-- ////////////////////////////////////////////////////////////////////////////// -->

<?php
$meals = array(
  array(
    'meal' => 'Breakfast',
    'alternativ' => ['Yoghurt','Porrage', 'Milk'],
  ),
  array(
    'meal' => 'Lunch',
    'alternativ' => ['Hot Dog','Sandwich','Soup'],
  ),
  array(
    'meal' => 'Dinner',
    'alternativ' => ['Chicken','Beef','Sausage'],
    ),
)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Column With Food</title>
</head>
<body>

    <main>
        <table >
            <?php 
                echo "<tr><th>What Meal?</th><th>Alternativ 1</th><th>Alternativ 2</th><th>Alternativ 3</th></tr>";
                foreach ($meals as $meal){
                    echo "<tr><th>".$meal[meal]."</th>";
                        foreach($meal[alternativ] as $alternativ) {
                            echo "<td>".$alternativ."</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </table>
    </main>

</body>
</html>

<!-- ////////////////////////////////////////////////////////////////////////////// -->

$what_meal = array_column($meals, 'meal');
print_r($what_meal);

print_r(array_column($meals, 'meal'));
