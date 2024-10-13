<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les Cookies</title>
</head>
<body>
    <?php 

    /*
    Par définition: Les Cookies sont un mécanisme d'enregistrement d'informations sur le client, et de lecture de ces informations.
    Le système de Cookie permet d'identifier et de suivre les visiteurs. 
    On peut envoyer un Cookie avec la fonction setcookie() ou setrawcookies().
    */

    //Verifions si l'utilisateur se connecte pour la première fois ou s'il a éffacé le cookie

    if(isset($_COOKIE['nom'])) {
        echo 'Bonjour ' . $_COOKIE['nom'];
    }else{     
   
    ?>

        <!-- Mise en place du formulaire HTML -->

        <form method="post" action="traitement.php">
            <p>
                <label for="identifiant"> Votre nom: </label>
                <input type="text" name="nom">
            </p>
            <p><input type="submit" value="Valider"></p>

        </form>

    <?php
    
    }

    ?>

</body>
</html>