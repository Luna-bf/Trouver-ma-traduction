<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trouver ma traduction - Accueil</title>
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
    <!-- M'inspirer du projet WebNova pour le style du texte ! -->
    <header class="hero">
        <nav class="hero-nav">
            <h1>Toutes vos traductions rassemblées à un seul endroit.</h1>

            <ul>
                <li><a href="front/signup.php">S'inscrire</a></li>
                <li><a href="front/signin.php">Se connecter</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="translation-titles">
            <span>Avide de lecture, mordu de musique ou bien lecteur occasionnel ?</span>
            <span>Notre site est accessible à tous et propose toute une variété de traductions, tel que :</span>
        </section>

        <section class="translation-parent">
            <div class="translation-card">
                <figure class="book">
                    <img src="assets/imgs/general/books.png" alt="Livres">
                </figure>
                
                <span>Livres</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur expedita rem eveniet assumenda ex nesciunt iure quasi est. Deleniti quaerat aspernatur facilis et repellendus iste inventore saepe nam? Quia quibusdam illo velit blanditiis praesentium?</p>
            </div>

            <div class="translation-card">
                <figure class="book">
                    <img src="assets/imgs/general/music-sheet.png" alt="Chansons">
                </figure>
                
                <span>Chansons</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, nesciunt! Ex consequatur optio praesentium. Suscipit officia enim ratione quaerat consectetur nihil modi dolor officiis facilis labore, vero adipisci nam exercitationem!</p>
            </div>
            
            <div class="translation-card">
                <figure class="texts">
                    <img src="assets/imgs/general/handwritten-text.png" alt="Textes">
                </figure>

                <span>Textes</span>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis ullam unde sed ratione similique soluta et nostrum ex est dolor alias, consectetur cumque nemo, mollitia corrupti in recusandae officiis totam dignissimos magni eveniet aliquid.</p>
            </div>
        </section>
    </main>
    

    <footer class="d-flex">
        <div class="d-flex logo-text margin-foot">
            <div class="parent-logo">
                <a href="#">
                    <img src="assets/imgs/logo.png" alt="website logo" id="website-logo-footer">
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
                    <li><a href="#">Accueil du site</a></li>
                    <li><a href="./front/accueil-connect.php">Accueil (traductions)</a></li>
                    <li><a href="#">Profil</a></li>
                </ul>
            </div>
                    
            <div class="d-flex parent-socials margin-foot">
                <h3 id="socials-title">Nos réseaux sociaux</h3>
                <ul class="socials">
                    <li><a href="https://www.facebook.com/?locale=fr_FR" target="_blank"><img src="assets/imgs/icons/facebook-logo.png" alt="Facebook logo" class="facebook"></a></li>
                    <li><a href="https://www.instagram.com/" target="_blank"><img src="assets/imgs/icons/instagram-logo.png" alt="Instagram logo" class="instagram"></a></li>
                    <li><a href="https://www.youtube.com/" target="_blank"><img src="assets/imgs/icons/youtube-logo.png" alt="Youtube logo" class="youtube"></a></li>
                </ul>
            </div>
        </div>

        <hr>

        <p>Toutes les images viennent de <a href="https://www.freepik.com/" target="_blank">Freepik</a></p>
    </footer>
</body>
</html>