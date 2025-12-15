<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Préférences de contenu - Trouver Ma Traduction</title>
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
            <li class="border-left"><a href="preferences.php" class="d-flex"><i class="fa-solid fa-paperclip"></i>Préférences de
                    contenu</a></li>
            <li><a href="accessibility.php" class="d-flex"><i
                        class="fa-solid fa-universal-access"></i>Accessibilité</a></li>
            <li><a href="account.php" class="d-flex"><i class="fa-solid fa-gear"></i>Votre compte</a></li>
        </ul>

        <!--
                Y améliorer en donnant la possibilité de choisir plusieurs styles et changer le type d'options proposées
                en conséquences.
            -->
        <div class="d-flex accessibility-form separator">
            <form>
                <div class="d-flex param">
                    <label for="recommendations">Recommendations</label>
                    <select name="recommendations" id="recommendations" class="profile-input">
                        <option value="songs">Chansons</option>
                        <option value="books">Livres</option>
                        <option value="texts">Textes</option>
                    </select>
                </div>

                <!-- Faire comme sur la correction d'Henry (exercice du générateur de blagues) -->
                <div class="d-flex param">
                    <label for="styles">Style(s)</label>
                    <select name="styles" id="styles" class="profile-input">
                        <option value="fantasy">Fantasy</option>
                        <option value="horreur">Horreur</option>
                        <option value="romance">Romance</option>
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

<!-- Mon fichier JS -->
<script src="/js/app.js"></script>
</body>

</html>