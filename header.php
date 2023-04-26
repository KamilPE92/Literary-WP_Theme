<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo("charset") ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title> Theme</title>
</head>

<body <?php body_class(); ?>>
    <div class="container">
        <header class="header ">
            <div class="logo">
                <a class="brand" href="">Słowo</a>
                <h2 class="main--cta--logo">Grzech nie czytać</h2>
            </div>
            <div class=" hamburger" id="hamburger-btn">
                <span class="line-1"></span>
                <span class="line-2"></span>
                <span class="line-3"></span>
            </div>
            <nav class="nav">
                <ul class="menu-items">
                    <li><a href="#" class="menu-item">Kryminał</a></li>
                    <li><a href="#" class="menu-item">Romans</a></li>
                    <li><a href="#" class="menu-item">Fantastyka</a></li>
                    <li><a href="#" class="menu-item">Młodzieżowe</a></li>
                    <li><a href="#" class="menu-item">Obyczajowe</a></li>

                </ul>


            </nav>
            <div class="social">
                <a href="https://patronite.pl/" target="blank" title="Zostań naszym Patronem">
                    <img src="<?php echo get_template_directory_uri() . '/includes/img/patronite logos-5.png' ?>"
                        alt="Patronite Icon"> </a>
                <a href="https://www.facebook.com/" target="blank" title=" Profil naFacebooku">
                    <img src="<?php echo get_template_directory_uri() . '/includes\img\fb color.svg ' ?>"
                        alt="Facebook"> </a>
                <a href="https://support.discord.com/hc/pl" target="blank"
                    title="Dołącz do naszej społeczności na Discordzie">
                    <img src="<?php echo get_template_directory_uri() . '/includes\img\Discord-Logo-Color.svg' ?>"
                        alt="Discord Icon"> </a>
                <!-- !end of social div -->
            </div>
        </header>