<?php

$nom = null;

// Permet de verifier si le parametre GET action est defini et a la valeur 'deconnecter'. Si tel est la cas, on effectue 2 actions
if(!empty($_GET['action']) && $_GET['action'] === 'deconnecter') {

    unset($_COOKIE['utilisateur']);
    // CE la va garantir que le cookie soit supprimé côté client lors de la peochaine requête
    setcookie('utilisateur', '', time() - 10); // Permet de supprimer le cookie dans les 10 secondes avant l'heure actuelle
}

if(!empty($_COOKIE['utilisateur'])) {
    $nom = $_COOKIE['utilisateur'];
}

if(!empty($_POST['nom'])) {
    setcookie('utilisateur', $_POST['nom']);
    $nom = $_POST['nom'];
}

?>

<?php if ($nom) : ?>
    <h1> Bonjour <?= htmlentities($nom) ?> </h1>
    <a href="page.html?action=deconnecter"> Se deconnecter </a>
<?php else : ?>
    <form action="" method="POST">
        <div class="form-group">
            <input class="form-control" type="text" name="nom" placeholder="Entrer votre nom">
        </div>
        <button type="submit" class="btn btn-primary"> Se connecter </button>
    </form>
<?php endif; ?>    