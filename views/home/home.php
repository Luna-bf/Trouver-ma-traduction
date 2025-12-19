<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Trouver Ma Traduction</title>
    <link rel="stylesheet" href="/style/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="icon" href="/assets/imgs/favicon/favicon-48x48.png">
</head>

<!-- Header -->
<?php require_once('../inc/_header.php') ?>

<main class="accueil-connect-container">
    <a href="../home/search-result.php">Soumettre form</a>

    <h2>Nouvelles traductions</h2>

    <div class="swiper"> <!-- Le conteneur principal du slider -->
        <div class="cards-wrapper"> <!-- Boîte contenant toutes les cartes, leur style ainsi que les fonctionnalités du slider -->
            <div class="swiper-wrapper"> <!-- Boîte contenant chaque slides (cartes) individuellement. Toutes les cartes seront les enfants de cet élément -->

                <?php require_once('../inc/_swiper-slide.php') ?>

                <div class="swiper-slide-button swiper-button-prev"></div>
                <div class="swiper-slide-button swiper-button-next"></div>
            </div>
        </div>
</main>

<!-- Footer -->
<?php require_once('../inc/_footer.php'); ?>

<!-- Le JS de Swiper -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- Mes fichiers JS -->
<script src="/js/slider.js"></script>
<script src="/js/app.js"></script>
</body>

</html>