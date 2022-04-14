<?php
// chargement des dépendances de composer
require_once "vendor/autoload.php";

// appel des classes qu'on va utiliser dans ce fichier en utilisant le namespace
use Twig\Loader\FilesystemLoader;
// idem mais on renomme la classe (utile si cette classe existe avec le même nom dans le même fichier, même si l'espace de nom est différent)
use Twig\Environment as TwigEnvironment;

// notre dossier contenant les templates
$folder = new FilesystemLoader("view");

// création de notre environnement Twig
$twig = new TwigEnvironment($folder);

// affichage d'un extend de  base html
echo $twig->render("base03-enfant-niveau1.html.twig");
