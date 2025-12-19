<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toutes vos traductions rassemblées à un seul endroit - Trouver Ma Traduction</title>
    <link rel="stylesheet" href="/style/main.css">
    <link rel="icon" href="/assets/imgs/favicon/favicon-48x48.png">
</head>

<body class="bg-color-brown">
    <header class="hero">
        <div class="hero-div">
            <h1>Toutes vos traductions rassemblées à un seul endroit.</h1>
            <p>Chansons, textes, livres... Notre site communautaire rassemble des centaines d'adaptions traduites
                par des amoureux de la langue et de l'art !</p>

            <ul>
                <li>
                    <form action="../form/signup.php">
                        <input type="submit" value="S'inscrire" class="hero-input">
                    </form>
                </li>
                <li>
                    <form action="../form/signin.php">
                        <input type="submit" value="Se connecter" class="hero-input">
                    </form>
                </li>
            </ul>
        </div>
    </header>

    <main class="d-flex accueil-container">
        <section class="translation-titles">
            <p>Avide de lecture, mordu de musique ou bien lecteur occasionnel ?</p>
            <p>Notre site est accessible à tous et propose toute une variété de traductions, tel que :</p>
        </section>

        <section class="translation-parent d-flex">
            <div class="translation-card d-flex">
                <figure class="card-img">
                    <img src="../../assets/imgs/general/accueil/books-card-img.png" alt="Livres">
                </figure>

                <div class="summary d-flex">
                    <span>Livres</span>
                    <p>Fantasy, roman policier, histoires à l'eau de rose... Tout les types de récits sont proposés sur
                        le site et n'attendent plus que
                        vous pour les découvrir !</p>
                    <a href="../form/signup.php">Commencez vos recherches dès maintenant</a>
                </div>
            </div>

            <div class="translation-card d-flex">
                <figure class="card-img">
                    <img src="../../assets/imgs/general/accueil/song-card-img.png" alt="Chansons">
                </figure>

                <div class="summary d-flex">
                    <span>Chansons</span>
                    <p>Replongez dans vos chansons préférées grâce aux traductions proposées : pop, rock, jazz... Tout
                        les
                        styles de musique sont présents !</p>
                    <a href="../form/signup.php">Commencez vos recherches dès maintenant</a>
                </div>
            </div>

            <div class="translation-card d-flex">
                <figure class="card-img">
                    <img src="../../assets/imgs/general/accueil/form-img-test.png" alt="Textes">
                </figure>

                <div class="summary d-flex">
                    <span>Textes</span>
                    <p>Vous favorisez les récits condencés ? Les traductions de poèmes, de nouvelles et autres textes
                        courts seront parfaites pour vous !</p>
                    <a href="../form/signup.php">Commencez vos recherches dès maintenant</a>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <?php require_once('../inc/_footer.php'); ?>
</body>

</html>