<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trouver ma traduction - Accueil</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
    <header>
        <nav>
            <div id="space-between">
                <a href="#" class="d-flex">
                    <img src="assets/imgs/logo.png" alt="website logo" id="website-logo-nav">
                </a>

                <ul class="d-flex" id="nav-ul">
                    <li><a href="front/signup.php">Inscription</a></li>
                    <li><a href="front/signin.php">Connexion</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="translation-parent d-flex">
        <div class="translation d-flex">
            <img src="assets/imgs/translation.png" alt="Translation" id="translation-img">
            
            <div class="title d-flex">
                <h2 id="translation-title">Toutes vos traductions musicales rassemblées à un seul endroit</h2>
                
                <a href="front/signin.php" class="d-flex" id="search">
                    <img src="assets/imgs/icons/magnifying-glass.png" alt="Magnifying glass" id="searching-glass">
                    <h3 id="start-searching">Commencez vos recherches</h3>
                </a>
            </div>
        </div>
    </div>

    <footer class="d-flex">
        <div class="d-flex logo-text">
            <div class="parent-logo">
                <a href="#">
                    <img src="assets/imgs/logo.png" alt="website logo" id="website-logo-footer">
                </a>
            </div>

            <div class="d-flex parent-text">
                <div class="text">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo placeat, dolorem tenetur a dolores quos assumenda architecto quaerat deserunt commodi nulla rerum quas eius. Eveniet modi, minima minus amet pariatur praesentium natus quo consequuntur.</p>
                </div>
            </div>
        </div>

        <hr>

        <div class="d-flex socials-pages">
            <div class="d-flex parent-pages">
                <h3 id="pages-title">Toutes les pages</h3>
                <ul class="pages">
                    <li><a href="#">Accueil du site</a></li>
                    <li><a href="./front/accueil-connect.php">Accueil (traductions)</a></li>
                    <li><a href="#">Profil</a></li>
                </ul>
            </div>
                    
            <div class="d-flex parent-socials">
                <h3 id="socials-title">Nos réseaux sociaux</h3>
                <ul class="socials">
                    <li><img src="assets/imgs/icons/facebook-logo.png" alt="Facebook logo" class="facebook"></li>
                    <li><img src="assets/imgs/icons/instagram-logo.png" alt="Instagram logo" class="instagram"></li>
                    <li><img src="assets/imgs/icons/youtube-logo.png" alt="Youtube logo" class="youtube"></li>
                </ul>
            </div>
        </div>

        <p>Toutes les images viennent de<a href="https://www.freepik.com/" target="_blank">Freepik</a></p>
    </footer>
</body>
</html>