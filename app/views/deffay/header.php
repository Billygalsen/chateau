<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?=$data['page_title'] . " | " . WEBSITE_TITLE?>
    </title>
    <link rel="stylesheet" href="<?=ASSETS?>deffay/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>


</head>
<body>
<!--Menu-->
<nav class="navbar">
    <div class="max-width">
        <div class="logo">
            <a href="<?= ROOT ?>home"><img src="<?=ASSETS?>deffay/img/logo.png" alt="logo" /></a>
            <a href="<?= ROOT ?>home">Deffay</a>
        </div>
        <ul class="menu">
            <li><a href="<?= ROOT ?>home" class="menu-btn">Accueil</a></li>
            <li><a href="<?= ROOT ?>galerie" class="menu-btn">Galerie</a></li>
            <li><a href="<?= ROOT ?>about" class="menu-btn">A propos</a></li>
            <li><a href="<?= ROOT ?>contact" class="menu-btn">Contact</a></li>
        </ul>
        <div class="menu-btn">
            <i class="fas fa-bars"></i>
        </div>
    </div>
</nav>
