3. Recept 🍽️
Vi skapar en array med tre associativa arrayer. Varje associativ array är ett recept. 
Alla recept har en titel, en lista med ingredienser och en löptext som beskriver hur man lagar måltiden.
Skriv sedan ett program som skriver ut alla recept snyggt formaterade efter varandra.
Utmaning: se till att beskrivningen av hur man lagar måltiden är numrerad UTAN att ha några nummer i den associativa arrayen.
Tips: En foreach som loopar igenom din array är en bra idé. Den arrayen innehåller arrayer så då vill vi kanske ha en till foreach.

<?php
    $recipes = [
        [
            "Title" => "Meatloaf", 
            "Ingredients" => ["1 pound ground beef", "1 egg", "1 onion", "1 cup milk", "1 cup crumbs, salt and pepper", "⅓ cup ketchup", "2 tablespoons brown sugar", "2 tablespoons mustard"],  
            "Directions" => ["Preheat the oven to 350 degrees F (175 degrees C). Lightly grease a 9x5-inch loaf pan.", 
                "Combine ground beef, onion, milk, bread crumbs and egg in a large bowl; season with salt and pepper. Transfer into prepared loaf pan.",
                "Mix ketchup, brown sugar, and mustard together in a small bowl until well combined; pour over meatloaf and spread it evenly over the top.",
                "Bake in the preheated oven until no longer pink in the center, about 1 hour."]
        ],
        [
            "Title" => "Edible Cookie Dough", 
            "Ingredients" => ["1 cup all-purpose flour", "¾ cup brown sugar", "½ cup butter", "1 teaspoon vanilla extract", "½ teaspoon salt", "2 tablespoons milk", "½ cup chocolate chips"],  
            "Directions" => ["To heat-treat your flour so it is safe to use: Place flour in a microwave-safe dish and cook for 1 minute and 15 seconds, stirring it every 15 seconds. Set aside.",
                "Beat sugar and butter with an electric mixer in a large bowl until creamy. Beat in vanilla extract and salt. Add heat-treated flour; mix until a crumbly dough forms. 
                Stir in milk until dough is just combined; fold in milk chocolate chips and mini chocolate chips."]
        ],
        [
            "Title" => "Sangria", 
            "Ingredients" => ["2 oranges", "light red wine", "400-500g mixed fruit", "100ml brandy", "500ml lemonade"],  
            "Directions" => ["Muddle the oranges in a large jug, mix in the wine and brandy, and put in the fridge for 1 hour to let the flavours mingle.", 
                "Add the fruit and top up with the lemonade. Stir well and serve over ice in tumblers or copa de balon glasses."]
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipes</title>
</head>
<body>

    <main>
        <h1>Recept</h1>
        <?php
            foreach($recipes as $recipe) {
                ?>
                <h2><?= $recipe["Title"]; ?></h2>
                <ul>
                    <?php
                        foreach($recipe["Ingredients"] as $ingredient) {
                            echo "<li>$ingredient</li>";
                        }
                    ?>
                </ul>
                <p>Instruktioner:</p>
                <ol>
                    <?php
                    foreach($recipe["Directions"] as $direction) {
                        echo "<li>$direction</li>";
                    }
                    ?>
                </ol>
                <?php
            }
        ?>
    </main>

</body>
</html>