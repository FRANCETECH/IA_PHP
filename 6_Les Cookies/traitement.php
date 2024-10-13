<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement des données</title>
</head>
<body>

    <?php

        if(isset($_POST['nom'])) {
            setcookie("nom", $_POST['nom'], time()+365*24*60*60, '/', '', true, true); // time()+365*24*60*60: est la durée de vie de notre cookie
        }

        // setcookie("nom", $_POST['nom'], time()+365*24*60*60, '/jeh', '', true, true);
        /**
         *  '/': Signifie que le cookie est disponible sur l'ensemble du domaine
         *  Sécurisé =>true: pour dire que  le cookie sera envoyé uniquement sur les connexion HTTPS (true)
         *  HTTP Only => true: Le cookie est accessible uniquement via le protocole HTTP, non par JavaScript
        */

    ?>
    
</body>
</html>