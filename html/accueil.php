<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trouver ma traduction - Accueil</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
    <nav>
        <div id="space-between">
            <div class="d-flex">
                <button id="change-theme" class="d-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#1f1f1f"><path d="M479.96-144Q340-144 242-242t-98-238q0-140 97.93-238t237.83-98q13.06 0 25.65 1 12.59 1 25.59 3-39 29-62 72t-23 92q0 85 58.5 143.5T648-446q49 0 92-23t72-62q2 13 3 25.59t1 25.65q0 139.9-98.04 237.83t-238 97.93Z"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#1f1f1f"><path d="M479.77-288Q400-288 344-344.23q-56-56.22-56-136Q288-560 344.23-616q56.22-56 136-56Q560-672 616-615.77q56 56.22 56 136Q672-400 615.77-344q-56.22 56-136 56ZM216-444H48v-72h168v72Zm696 0H744v-72h168v72ZM444-744v-168h72v168h-72Zm0 696v-168h72v168h-72ZM269-642 166-742l51-55 102 104-50 51Zm474 475L642-268l49-51 103 101-51 51ZM640-691l102-101 51 49-100 103-53-51ZM163-217l105-99 49 47-98 104-56-52Z"/></svg>
                </button>
                    
                <div class="dropdown-menu d-flex">
                    <a href="#" class="drop-link d-flex"><img src="imgs/flags/france-flag-80x53.png" alt="France flag big" class="big"><i class="fa-solid fa-sort-down"></i></a>
                    <div class="dropdown-content">
                        <a href="index.php?lang=fr" class="lang-change" id="fr"><img src="imgs/flags/france-flag.png" alt="France flag" class="flag">Français</a>
                        <a href="index.php?lang=en" class="lang-change" id="en"><img src="imgs/flags/uk-flag.png" alt="UK flag" class="flag">English</a>
                    </div>
                </div>
            </div>
                
            <div class="d-flex" id="nav-ul">
                <input type="text" placeholder="Rechercher..." id="nav-search-input" class="icon">
                <a href="php/signin.php" id="profile"><i class="fa-solid fa-circle-user"></i></a>
            </div>
        </div>
    </nav>

    <div class="translation-parent d-flex">
        <img src="imgs/translation.png" alt="Translation" id="translation-img">
    </div>

    <footer id="footer">
        <ul class="contacts">
            <li>Nos réseaux sociaux</li>
            <li><i class="fa-brands fa-square-facebook"></i></li>
            <li><i class="fa-brands fa-square-instagram"></i></li>
            <li><i class="fa-brands fa-square-twitter"></i></li>
            <li><i class="fa-brands fa-square-snapchat"></i></li>
        </ul>
        
        <ul class="contacts">
            <li id="logo"><a href="#"><img src="imgs/logo-160x160.png" alt="Logo et favicon de mon portfolio"></a></li>
        </ul>
    </footer>
    
    <script type="text/javascript" src="js/app.js" defer></script>
</body>
</html>