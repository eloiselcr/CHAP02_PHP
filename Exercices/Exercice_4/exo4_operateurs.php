<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='exo4_operateurs.css'>
    <title>Exo 4 - Les opérateurs PHP</title>
        <!-- 
        ----------- EXO 4 - LES OPERATEURS PHP -----------
        
    Creer un petit programme php qui resout une equation du second degre de type
    Ax2 + Bx + C = 0
    Comme on ne maitrise pas pour le moment les entrees utilisateur les variables A, B et C
    seront rentre manuellement dans le programme.
    -->
</head>
<body>

<h1>Bienvenue sur le calculateur aléatoire de Delta !</h1>

    <?php

    $NombreAleatoireA = rand(-50, 50);
    $NombreAleatoireB = rand(-50, 50);
    $NombreAleatoireC = rand(-50, 50);
    $Delta;

    $Delta = ($NombreAleatoireB) ** 2 + 4 * ($NombreAleatoireA) * ($NombreAleatoireC);

    echo "<p>Le delta est $Delta </p>";

    if($Delta > 0)
    {
        echo "<p>L'équation est supérieure à 0, donc l'équation admet 2 solutions réelles <br>distinctes : </p>";
        $r1 = round(-($NombreAleatoireB) - sqrt($Delta) / 2 * ($NombreAleatoireA));
        $r2 = round(-($NombreAleatoireB) + sqrt($Delta) / 2 * ($NombreAleatoireA));
        echo "<p>R1, qui est égal à $r1 et R2 qui est égal à $r2.</p>";
    }

    if($Delta == 0)
    {
        echo "<p>L'équation est égale à 0, donc l'équation admet 1 solution réelle : </p>";
        $r0 = round(-($NombreAleatoireB) / 2 * ($NombreAleatoireA));
        echo "<p>R0, qui est égal à $r0.</p>";
    }

    if($Delta < 0)
    {
        echo "<p>L'équation est inférieure à 0, donc l'équation n'admet aucune solution réelle.</p>";
    }

    ?>
    
</body>
</html>