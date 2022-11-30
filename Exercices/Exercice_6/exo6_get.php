<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 6 - Les formulaires et la methode GET</title>
        <!-- 
        ----------- EXO 6 - LES FORMULAIRES ET LA METHODE GET -----------
        
    Creer un petit formulaire avec une zone de texte et un bouton. Lorsque vous cliquer sur
    le bouton la page doit afficher ce que vous avez saisie en violet. Utilisez $_GET [‘champ1’].
    -->
</head>
<body>


    <form action="exo5_post.php" methode="get">
<label for="name">Name up to 8 characters</label>

 <input type="text" id="name" name="name" required>
    
</body>
</html>