<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trouver ma traduction - Connexion</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
    <nav>
        <div id="space-between">
            <a href="#" class="d-flex">
                <img src="../imgs/logo.png" alt="website logo" id="website-logo-nav">
            </a>
            <!--<div class="d-flex">
                <button id="change-theme" class="d-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#1f1f1f"><path d="M479.96-144Q340-144 242-242t-98-238q0-140 97.93-238t237.83-98q13.06 0 25.65 1 12.59 1 25.59 3-39 29-62 72t-23 92q0 85 58.5 143.5T648-446q49 0 92-23t72-62q2 13 3 25.59t1 25.65q0 139.9-98.04 237.83t-238 97.93Z"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#1f1f1f"><path d="M479.77-288Q400-288 344-344.23q-56-56.22-56-136Q288-560 344.23-616q56.22-56 136-56Q560-672 616-615.77q56 56.22 56 136Q672-400 615.77-344q-56.22 56-136 56ZM216-444H48v-72h168v72Zm696 0H744v-72h168v72ZM444-744v-168h72v168h-72Zm0 696v-168h72v168h-72ZM269-642 166-742l51-55 102 104-50 51Zm474 475L642-268l49-51 103 101-51 51ZM640-691l102-101 51 49-100 103-53-51ZM163-217l105-99 49 47-98 104-56-52Z"/></svg>
                </button>
            </div>
                
            <div class="dropdown-menu d-flex">
                <a href="#" class="drop-link d-flex"><img src="imgs/flags/france-flag-80x53.png" alt="France flag big" class="big"><i class="fa-solid fa-sort-down"></i></a>
                <div class="dropdown-content">
                    <a href="index.php?lang=fr" class="lang-change" id="fr"><img src="imgs/flags/france-flag.png" alt="France flag" class="flag">Français</a>
                    <a href="index.php?lang=en" class="lang-change" id="en"><img src="imgs/flags/uk-flag.png" alt="UK flag" class="flag">English</a>
                </div>
            </div> -->

            <div class="d-flex" id="nav-ul">
                <a href="#" id="profile"><i class="fa-solid fa-circle-user"></i></a>
            </div>
        </div>
    </nav>

    <div class="form-parent d-flex">
        <form action="form.php" class="d-flex">
            <h1>Se connecter au compte</h1>

            <div class="w-50-percent d-i-flex form-input-parent">
                <label for="username-email" class="w-50-percent mb-10">Nom d'utilisateur ou email</label>
                <input type="text" class="form-input mb-50" id="username-email">
            </div>

            <div class="w-50-percent d-i-flex form-input-parent">
                <label for="password" class="mb-10">Mot de passe</label>
                <input type="password" id="password" class="form-input">
                <a href="#" id="forgotten-password">Mot de passe oublié ?</a>
            </div>
                    
            <div class="w-50-percent d-i-flex" id="remember">
                <input type="checkbox" name="remember" id="remember-input">
                <label for="remember-input">Se souvenir de moi</label>
            </div>

            <div class="d-i-flex d-flex">
                <input type="submit" value="Se connecter" class="submit-btn">
            </div>

            <div class="d-flex" id="no-account-p">
                <p>Vous n'avez pas de compte ?</p>
            </div>
            
            <div class="d-i-flex d-flex">
                <a href="signup.php" class="other-btn">Créez en un</a>
            </div>
        </form>
    </div>

    <footer class="d-flex">
        <div class="d-flex logo-text">
            <div class="parent-logo">
                <a href="#">
                    <img src="../imgs/logo.png" alt="website logo" id="website-logo-footer">
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
                    <li><a href="#">Profil</a></li>
                    <li><a href="front/accueil.php">Accueil du site</a></li>
                    <li><a href="#">Accueil (traductions)</a></li>
                </ul>
            </div>
                    
            <div class="d-flex parent-socials">
                <h3 id="socials-title">Nos réseaux sociaux</h3>
                <ul class="socials">
                    <li><img src="../imgs/icons/facebook-logo.png" alt="Facebook logo" class="facebook"></li>
                    <li><img src="../imgs/icons/instagram-logo.png" alt="Instagram logo" class="instagram"></li>
                    <li><img src="../imgs/icons/youtube-logo.png" alt="Youtube logo" class="youtube"></li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>