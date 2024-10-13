<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de connexion</title>
</head>

<body>
    <h1>Formulaire de connexion</h1>

    <form method="post" action="traitement.php">
        
        <p>
            <label for="identifiant">Votre identifiant: </label>
            <input type="text" name="identifiant">
        </p>

        <p>
            <label for="motpasse">Votre mot de passe: </label>
            <input type="password" name="motpasse">
        </p>

        <p>
            <input type="submit" value="Connexion">
        </p>

    </form>

</body>

</html>