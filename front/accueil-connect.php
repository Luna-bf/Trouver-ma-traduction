<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Find My Translation</title>
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
    <header>
        <nav class="d-flex space-between">
            <div class="d-flex logo-input">
                <!-- <figure>
                    <img src="../assets/imgs/logo.png" alt="website logo" id="website-logo-nav">
                </figure> -->
                <a href="#">Logo</a>

                <form action="" class="inline d-flex search-form">
                    <div class="input-wrapper">
                        <input type="search" placeholder="Recherche...">
                    </div>
                    <button><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>

            <ul class="d-flex" id="nav-ul">
                <li id="profile-picture"><img src="../assets/imgs/profile-picture-example.png" alt="Profile test"></li>
            </ul>
        </nav>
    </header>

    <main>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, tempore sapiente?</p>
    </main>

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
</body>
</html>