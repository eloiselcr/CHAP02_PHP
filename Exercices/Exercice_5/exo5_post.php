<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='exo5_post.css'>
    <title>Exo 5 - Les formulaires et la methode POST</title>
            <!-- 
        ----------- EXO 5 - LES FORMULAIRES ET LA METHODE POST -----------
        
    Creer un petit programme php qui resout une equation du second degre de type
    Ax2 + Bx + C = 0
    Comme on ne maitrise pas pour le moment les entrees utilisateur les variables A, B et C
    seront rentre manuellement dans le programme.
    -->
</head>
<body>

<form method="post">
    Texte... <input type ="text" name="champ1">
    <input type="submit" name="zioummmm">
</form>

    <?php
    
        if (empty($_POST['champ1']))
        {
            echo "<p>Aucun texte n'a été saisi :(</p>";
        }
        else
        {
            echo "<p id='return'>".$_POST['champ1']."</p>";
        }


    ?>

    
</body>
</html>