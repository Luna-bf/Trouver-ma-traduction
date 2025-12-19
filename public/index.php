<?php

// Les requêtes de fichier seront effectuées ici (voir dossier "Ventes" dans htdocs)

// Je défini le chemin d'accès de chaque dossier ici :
define('ROOT', dirname(__DIR__)); // dirname(__DIR__) va récupérer le nom du dossier parent (ici "Trouver-Ma-Traduction") et le stocker dans la constante nommée "ROOT"

/* Je déclare une constante nommée "VIEWS" qui prend comme valeur la racine du projet concaténé avec la chaine de caractères
"/views", ce qui donne le chemin complet suivant : racine_du_projet/views
*/ 
define('VIEWS', ROOT . '/views');

// Appels des controllers :
require_once ROOT . '/src/HomeController.php';
require_once ROOT . '/src/FormController.php';
require_once ROOT . '/src/FileController.php';
require_once ROOT . '/src/PostController.php';
require_once ROOT . '/src/SettingsController.php';

/* REQUEST_URI correspond à ce qui se trouve dans l'url de la page, cette clé est stockée dans la superglobale $_SERVER
(un tableau contenant des données de type clé=>valeur) */
switch ($_SERVER['REQUEST_URI']) { // J'utilise un switch pour gérer les différents appels de fichiers

    // Racine (j'ai une erreur dans la console quand je lance le serveur, trouver pourquoi et demande à Henry si j'y arrive pas)
    case '/': // Ce chemin défini landing.php comme page d'accueil, j'arriverais sur cette page lorsque je lancerais le serveur
        (new HomeController())->landing(); // Je créé un objet HomeController() et j'appelle la méthode landing() afin d'appeler le fichier landing.php
        break;

    // FormController
    case '/form/signup': // Chemin d'accès : views/form/signup.php
        (new FormController())->signUp(); // Je créé un objet FormController() et j'appelle la méthode signUp() afin d'appeler le fichier signup.php
        break;

    case '/form/signin': // Chemin d'accès : views/form/signin.php
        (new FormController())->signIn(); // etc...
        break;

    // HomeController
    case '/home/home':
        (new HomeController())->home();
        break;

    case '/home/search-result':
        (new HomeController())->searchResult();
        break;

    case '/home/profile':
        (new HomeController())->profile();
        break;
        
    // FileController
    case '/file/file-viewer':
        (new FileController())->fileViewer();
        break;
        
    // PostController
    case '/posts/new-upload':
        (new PostController())->newUpload();
        break;
        
    // SettingsController
    case '/settings/profile-settings':
        (new SettingsController())->profileSettings();
        break;

    case '/settings/upload-profile-picture':
        (new SettingsController())->uploadProfilePicture();
        break;

    case '/settings/preferences':
        (new SettingsController())->preferences();
        break;

    case '/settings/accessibility':
        (new SettingsController())->accessibility();
        break;

    case '/settings/account':
        (new SettingsController())->account();
        break;

    default:
        echo "Page introuvable.";
        break;
}

?>