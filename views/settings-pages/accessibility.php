<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accessibilité - Trouver Ma Traduction</title>
    <link rel="stylesheet" href="/style/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="icon" href="/assets/imgs/favicon/favicon-48x48.png">
</head>

<!-- Header -->
<?php require_once('../components/_header.php') ?>

<main class="settings-container">
    <section class="settings-parent d-flex">
        <!-- Settings pages links -->
        <ul class="all-settings d-flex">
            <li><a href="profile-settings.php" class="d-flex"><i
                        class="fa-solid fa-user"></i>Profil</a></li>
            <li><a href="preferences.php" class="d-flex"><i class="fa-solid fa-paperclip"></i>Préférences de
                    contenu</a></li>
            <li class="border-left"><a href="accessibility.php" class="d-flex"><i
                        class="fa-solid fa-universal-access"></i>Accessibilité</a></li>
            <li><a href="account.php" class="d-flex"><i class="fa-solid fa-gear"></i>Votre compte</a></li>
        </ul>

        <div class="d-flex accessibility-form separator">
            <form>
                <div class="d-flex param theme-select">
                    <label for="theme">Thème</label>
                    <select name="theme" id="theme" class="profile-input">
                        <option value="light" id="light" selected>Lumineux</option>
                        <option value="dark" id="dark">Sombre</option>
                    </select>
                </div>

                <div class="d-flex param language-select">
                    <label for="language">Langue</label>
                    <select name="language" id="language" class="profile-input">
                        <option value="french" selected>Français</option>
                        <option value="english">English</option>
                    </select>
                </div>

                <div class="d-flex param">
                    <label for="myRange">Taille de la police</label>
                    <input type="range" min="1" max="100" value="16" class="slider" id="myRange">
                    <input type="number" id="number-input" class="profile-input" value="">
                </div>

                <div class="d-flex param">
                    <label for="text-to-speech">Synthèse vocale</label>
                    <select name="text-to-speech" id="text-to-speech" class="profile-input">
                        <option value="enabled">Activée</option>
                        <option value="disabled" selected>Désactivée</option>
                    </select>
                </div>

                <div class="submit-changes">
                    <button type="submit">Enregistrer les modifications</button>
                </div>
            </form>
        </div>
    </section>
</main>

<!-- Footer -->
<?php require_once('../components/_footer.php') ?>

<!-- Mes fichiers JS -->
<script src="/js/app.js"></script>
<script src="/js/settings-js/slide-bar.js"></script>
<!-- <script src="/js/settings-js/theme.js"></script> -->
</body>

</html>