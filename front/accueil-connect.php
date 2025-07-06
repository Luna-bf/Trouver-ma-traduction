<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Find My Translation</title>
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
</head>

<body>
    <header>
        <nav class="d-flex space-between">
            <div class="d-flex logo-input">
                <a href="#">Logo</a>

                <form action="" class="inline search-form">
                    <div class="d-flex input-wrapper">
                        <input type="search" placeholder="Recherche...">
                        <button><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </form>
            </div>

            <ul class="d-flex" id="nav-ul">
                <li id="profile-picture"><img src="../assets/imgs/profile-picture-example.png" alt="Profile test"></li>
            </ul>
        </nav>
    </header>

    <main class="container">

        <h2>Nouvelles traductions</h2>

        <div class="slider-container d-flex">
            <div class="slider">
                <div>
                    <figure>
                        <img src="../assets/imgs/general/handwritten-text.png" alt="image 1">
                    </figure>
                </div>
                <div>
                    <figure>
                        <img src="../assets/imgs/general/music-sheet.png" alt="image 1">
                    </figure>
                </div>
                <div>
                    <figure>
                        <img src="../assets/imgs/general/books.png" alt="image 1">
                    </figure>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="d-flex">
        <div class="d-flex logo-text margin-foot">
            <div class="parent-logo">
                <a href="#">
                    <img src="../assets/imgs/logo.png" alt="website logo" id="website-logo-footer">
                </a>
            </div>

            <div class="d-flex parent-text">
                <div class="text">
                    <p>Ce site a été réalisé dans le cadre de la formation "TP - Développeur Web" de l'AFEC.</p>
                </div>
            </div>
        </div>

        <hr>

        <div class="d-flex socials-pages margin-foot">
            <div class="d-flex parent-pages">
                <h3 id="pages-title">Toutes les pages</h3>
                <ul class="pages">
                    <li><a href="accueil.php">Accueil du site</a></li>
                    <li><a href="#">Accueil (traductions)</a></li>
                    <li><a href="#">Profil</a></li>
                </ul>
            </div>

            <div class="d-flex parent-socials margin-foot">
                <h3 id="socials-title">Nos réseaux sociaux</h3>

                <ul class="socials">
                    <li><a href="https://www.facebook.com/?locale=fr_FR" target="_blank"><img src="../assets/imgs/icons/facebook-logo.png" alt="Facebook logo" class="facebook"></a></li>
                    <li><a href="https://www.instagram.com/" target="_blank"><img src="../assets/imgs/icons/instagram-logo.png" alt="Instagram logo" class="instagram"></a></li>
                    <li><a href="https://www.youtube.com/" target="_blank"><img src="../assets/imgs/icons/youtube-logo.png" alt="Youtube logo" class="youtube"></a></li>
                </ul>
            </div>
        </div>

        <hr>

        <p class="freepik">Toutes les images viennent de <a href="https://www.freepik.com/" target="_blank">Freepik</a></p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="../assets/js/app.js"></script>
</body>

</html>