<?php

// Appel de la classe parent
require_once "BaseController.php";

// La classe SettingsController hérite de la classe BaseController : elle récupère ses propriétés et méthodes
class SettingsController extends BaseController {

    // J'appelle la méthode render() dans d'autres méthodes qui vont chacunes appeler le chemin d'accès d'un fichier spécifique
    public function profileSettings() { // Cette méthode va appeler le fichier profile-settings.php
        $this->render('settings-pages/profile-settings.php');
    }

    public function uploadProfilePicture() { // Cette méthode va appeler le fichier upload-profile-picture.php
        $this->render('settings-pages/upload-profile-picture.php');
    }

    public function preferences() { // etc...
        $this->render('settings-pages/preferences.php');
    }

    public function accessibility() {
        $this->render('settings-pages/accessibility.php');
    }

    public function account() {
        $this->render('settings-pages/account.php');
    }
}