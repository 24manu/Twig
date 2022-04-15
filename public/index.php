<?php
// chargement de l'autoload de composer pour le chargement des dépendances du vendor
require_once '../vendor/autoload.php';


// on donne le chemin d'un dossier où se trouveront nos vues (ici des fichiers en .twig)
$loader = new \Twig\Loader\FilesystemLoader('../view/theme');
$twig = new \Twig\Environment($loader, []);
