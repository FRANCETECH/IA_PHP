<?php

// On se connecte à là base de données 
require_once('connect.php');

// On détermine sur quelle page on se trouve
if(isset($_GET['page']) && !empty($_GET['page'])){
    $currentPage = (int) strip_tags($_GET['page']);
}else{
    $currentPage = 1;
}

// On détermine le nombre total d'articles 
$sql = 'SELECT COUNT(*) AS nb_articles FROM `articles`;';

// On prépare la requête 
$query = $db->prepare($sql);

// On exécute 
$query->execute();

// On récupère le nombre d'articles
$result = $query->fetch();

$nbArticles = (int) $result['nb_articles'];

// On détermine le nombre d'articles par page
$parPage = 10;

// On calcule le nombre de pages total
$pages = ceil($nbArticles / $parPage);

// Calcul du 1er article de la page
$premier = ($currentPage * $parPage) - $parPage;

$sql = 'SELECT * FROM `articles` ORDER BY `created_at` DESC LIMIT :premier, :parpage;';

// On prépare la requête
$query = $db->prepare($sql);

$query->bindValue(':premier', $premier, PDO::PARAM_INT); // PARAM_INT: Représente le type de données INTEGER SQL. 
$query->bindValue(':parpage', $parPage, PDO::PARAM_INT);

// On exécute
$query->execute();

// On récupère les valeurs dans un tableau associatif pour avoir le resultat sous forme d'un tableau assocatif
$articles = $query->fetchAll(PDO::FETCH_ASSOC);

// On ferme la connexion à la base de données après avoir récupéré les articles nécessaires pour afficher la page.
require_once('close.php'); 
?>
<!DOCTYPE html> 
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <section class="col-12">
                <h1>Liste des articles</h1>
                <table class="table">
                    <thead>
                        <th>ID</th>
                        <th>Titre</th>
                        <th>Date</th>
                    </thead>
                    <tbody>
                        <?php
                        foreach($articles as $article){
                        ?>
                            <tr>
                                <td><?= $article['id'] ?></td>
                                <td><?= $article['titre'] ?></td>
                                <td><?= $article['created_at'] ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <nav>
                    <ul class="pagination">
                        <!-- ($currentPage == 1) ? "disabled" : "" est une condition ternaire qui vérifie si la page actuelle est la première. Si c'est le 
                        cas, la classe "disabled" est ajoutée pour désactiver le lien vers la page précédente. -->
                        <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
                            <!-- L'attribut href est généré avec un paramètre page qui indique le numéro de la page précédente. Par exemple, si la page actuelle est la page 3, 
                            le lien pointera vers ./?page=2. Le texte affiché est "Précédente". -->
                            <a href="./?page=<?= $currentPage - 1 ?>" class="page-link">Précédente</a>
                        </li>

                        <!--  Cette boucle génère les liens vers les pages numérotées. Elle itère à travers toutes les pages disponibles, de 1 à $pages, et crée un lien pour chaque page-->
                        <?php for($page = 1; $page <= $pages; $page++): ?>
                            <!-- un autre élément de liste représentant un lien vers une page numérotée. La classe "active" est ajoutée si la page actuelle correspond à la page de la boucle 
                            en cours.-->
                            <li class="page-item <?= ($currentPage == $page) ? "active" : "" ?>">
                            <!--L'attribut href est généré avec le numéro de page actuel dans l'URL. Par exemple, si $page est 3, le lien pointera vers ./?page=3. Le texte affiché est 
                            le numéro de page lui-même. -->
                                <a href="./?page=<?= $page ?>" class="page-link"><?= $page ?></a>
                            </li>
                        <?php endfor ?>
                        <!--Cet élément de liste représente le bouton de navigation vers la page suivante. La classe "disabled" est ajoutée si la page actuelle est la 
                        dernière page disponible-->
                        <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
                            <!--L'attribut href est généré avec un paramètre page qui indique le numéro de la page suivante. Le texte affiché est "Suivante"-->
                            <a href="./?page=<?= $currentPage + 1 ?>" class="page-link">Suivante</a>
                        </li>
                    </ul>
                </nav>
            </section>
        </div>
    </main>
</body>
</html>