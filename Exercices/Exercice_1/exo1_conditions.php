<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='exo1_conditions.css'>
    <title>Exo 1 - Les Conditions</title>
    <!-- 
        ----------- EXO 1 - LES CONDITIONS -----------
        
        Page incluant du PHP qui génère un nombre aléatoire. Si le nombre renvoyé est pair, le cadre associé 
        sera de couleur rouge. A l'inverse, un nombre impair sera de couleur bleu.
    --> 
</head>
<body>

    <h1>Bienvenue sur le site du nombre aléatoire</h1>

    <?php
        $NombreAleatoire = rand(0, 100); // On choisit un nombre au hasard allant de 0 à 100
        if ($NombreAleatoire%2 == 0) // Si la division euclidienne du nombre est égale à 0
        {
            echo "<p class='pair'>Le nombre $NombreAleatoire est pair. </p>"; // Le nombre est pair 
        }
        else 
        {
            echo "<p class='impair'>Le nombre $NombreAleatoire est impair. </p>"; // Le nombre est impair 
        }
    ?>

</body>
</html>