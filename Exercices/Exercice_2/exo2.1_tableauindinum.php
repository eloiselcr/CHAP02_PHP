<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 2.1 - Les tableaux PHP a indice numerique</title>
        <!-- 
        ----------- EXO 1 - LES TABLEAUX PHP A INDICE NUMERIQUE -----------
        
       Créer un tableau php qui contient 5 chiffres.
       Afficher les 5 chiffres à la suite grace au parcours du tableau dans une boucle for.
    --> 
</head>
<body>
    <?php
    $array=[
        1=>8,
        2=>10,
        3=>64,
        4=>9,
        5=>21,
    ];
    for ($i=0; $i<=5; $i++)
    {
        echo $array[$i]. " ";
    }

    ?>
    
</body>
</html>