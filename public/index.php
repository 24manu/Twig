<?php
// chargement de l'autoload de composer pour le chargement des dépendances du vendor
require_once '../vendor/autoload.php';
// chargement d'autres dépendance
require_once '../model/DatasTheme.php';


// on donne le chemin d'un dossier où se trouveront nos vues (ici des fichiers en .twig)
$loader = new \Twig\Loader\FilesystemLoader('../view/theme');
$twig = new \Twig\Environment($loader, []);

// routeur dans notre CF
if(isset($_GET['page'])){

    // on est sur l'accueil
}else{

}