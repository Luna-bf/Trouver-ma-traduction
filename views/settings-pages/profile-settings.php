<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - Trouver Ma Traduction</title>
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
            <li class="border-left"><a href="profile-settings.php" class="d-flex"><i
                        class="fa-solid fa-user"></i>Profil</a></li>
            <li><a href="preferences.php" class="d-flex"><i class="fa-solid fa-paperclip"></i>Préférences de
                    contenu</a></li>
            <li><a href="accessibility.php" class="d-flex"><i
                        class="fa-solid fa-universal-access"></i>Accessibilité</a></li>
            <li><a href="account.php" class="d-flex"><i class="fa-solid fa-gear"></i>Votre compte</a></li>
        </ul>

        <div class="profile-params separator">
            <div class="profile-picture d-flex">
                <figure><img src="/assets/imgs/placeholders/default-pfp.png" alt="Profile picture"></figure>
                <ul>
                    <li>John Doe</li>
                    <li><a href="upload-profile-picture.php">Changer votre photo de profil</a></li>
                </ul>
            </div>

            <div class="d-flex profile-form">
                <form> <!--class="table-form"-->
                    <div class="d-flex param">
                        <label for="profile-username">Nom d'utilisateur</label>
                        <input type="text" name="profile-username" class="profile-input" id="profile-username" placeholder="John Doe">
                    </div>

                    <div class="d-flex param">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="profile-textarea" placeholder="Lorem ipsum arcu congue ut venenatis tortor eu viverra leo dolor hendrerit quis faucibus venenatis ac leo in aliquetLorem ipsum arcu congue ut venenatis tortor eu viverra leo dolor hendrerit quis faucibus venenatis ac leo in aliquetLorem ipsum arcu congue ut venenatis tortor eu viverra leo dolor hendrerit quis faucibus venenatis ac leo in aliquet tristique mollis dictum arcu ultricies ..."></textarea>
                    </div>

                    <div class="d-flex param">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="profile-input" placeholder="johnDoe@exemple.com">
                    </div>

                    <div class="d-flex param">
                        <label for="phone">Téléphone</label>
                        <input type="tel" name="phone" id="phone" class="profile-input" placeholder="12 34 56 78 90">
                    </div>

                    <div class="submit-changes">
                        <button type="submit">Enregistrer les modifications</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>

<!-- Footer -->
<?php require_once('../components/_footer.php') ?>

<!-- Mon fichier JS -->
<script src="/js/app.js"></script>
</body>

</html>