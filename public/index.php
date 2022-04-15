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
    switch($_GET['page']):
        case 'contact':
            $titre = DatasTheme::TITLE['contact'];
            $sstitre = DatasTheme::SUBTITLE['contact'];
            echo $twig->render('contact.html.twig',
                ['title'=>$titre,
                    'soustitre'=>$sstitre,
                    'texte'=>DatasTheme::SUBTEXT['contact']]);
            break;
            endswitch;
    // on est sur l'accueil
}else{
    $titre = DatasTheme::TITLE['accueil'];
    $sstitre = DatasTheme::SUBTEXT['accueil'];
    echo $twig->render('homepage.html.twig',['title'=>$titre, 'soustitre'=>$sstitre]);
}