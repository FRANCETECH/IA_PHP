<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Membre</title>
</head>
<body>
        <h2>Espace Membre</h2>
    <?php       
        if(isset($_SESSION['identifiant']) && isset($_SESSION['motpasse'])) {
            echo 'Votre identifiant est : ' .$_SESSION['identifiant']. 'et votre mot de passe est :'.$_SESSION['motpasse'].'<br>';

            echo '<a href="deconnexion.php"> Déconnexion </a> <br>';
        }else{
            echo 'Vous devez vous identifier !';
        }

    ?>    
    
</body>
</html>