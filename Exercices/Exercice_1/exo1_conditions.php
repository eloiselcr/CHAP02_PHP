<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='exo1_conditions.css'>
    <title>Exo 1 - Les Conditions</title>
</head>
<body>
    <h1>Bienvenue sur le site du nombre aléatoire</h1>
    <?php
    $NombreAleatoire = rand(0, 100);
    if ($NombreAleatoire%2 == 0) 
    {
        echo "<p class='pair'>Le nombre $NombreAleatoire est pair. </p>";
    }
    else 
    {
        echo "<p class='impair'>Le nombre $NombreAleatoire est impair. </p>";
    }
    ?>

</body>
</html>