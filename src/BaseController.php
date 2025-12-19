<?php

class BaseController {
    /*
    La méthode render() appelle le chemin d'accès à une page et prend pour paramètre la variable $path, qui prendra
    pour valeur la seconde partie du chemin d'accès.
    */
    public function render($path) {
        /* Le chemin d'accès démarre dans le dossier "views" (là où se trouvent toutes les pages), le chemin d'accès
        complet sera donc : "views/mon_dossier/mon_fichier" */
        require_once VIEWS . "/$path";
        exit;
    }
}