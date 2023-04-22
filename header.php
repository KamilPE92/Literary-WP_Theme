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
                <a class="brand" href="">Logo</a>
                <h2 class="main--cta--logo">Grzech nie czytać</h2>
            </div>
            <div class=" hamburger" id="hamburger-btn">
                <span class="line-1"></span>
                <span class="line-2"></span>
                <span class="line-3"></span>
            </div>
            <nav>
                <ul class="menu-items">
                    <li><a href="#" class="menu-item">Start</a></li>
                    <li><a href="#" class="menu-item expand-btn important--item">Opowiadania</a>
                        <div class="mega-menu expandable">
                            <div class="content">
                                <div class="col">
                                    <section>
                                        <h3 class="heading--col">Na skróty</h3>
                                        <ul class="mega-links">
                                            <li> <a href="#">Najnowsze</a></li>
                                            <li> <a href="#">Redakcja poleca</a></li>
                                            <li> <a href="#">Top 10</a></li>
                                            <li> <a href="#">Losowy tekst</a></li>
                                            <li> <a href="#">Indeks Autorów</a></li>
                                            <li> <a href="#">Pisz dla nas</a></li>

                                        </ul>
                                    </section>
                                </div>
                                <div class="col">
                                    <section>
                                        <h3 class="heading--col">Kolumna 2</h3>
                                        <ul class="mega-links">
                                            <li><a href="#">Item-1</a></li>
                                            <li><a href="#">Item-2</a></li>
                                            <li><a href="#">Item-3</a></li>
                                            <li><a href="#">Item-4</a></li>
                                            <li><a href="#">Item-5</a></li>
                                        </ul>
                                    </section>
                                </div>
                                <div class="col">
                                    <section>
                                        <h3 class="heading--col">Kolumna 3</h3>
                                        <ul class="mega-links">
                                            <li><a href="#">Item-1</a></li>
                                            <li><a href="#">Item-2</a></li>
                                            <li><a href="#">Item-3</a></li>
                                            <li><a href="#">Item-4</a></li>
                                            <li><a href="#">Item-5</a></li>
                                        </ul>
                                    </section>
                                </div>
                                <div class="col">
                                    <section>
                                        <h3 class="heading--col">Kolumna 4</h3>
                                        <ul class="mega-links">
                                            <li><a href="#">Item-1</a></li>
                                            <li><a href="#">Item-2</a></li>
                                            <li><a href="#">Item-3</a></li>
                                            <li><a href="#">Item-4</a></li>
                                            <li><a href="#">Item-5</a></li>
                                        </ul>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </li>
                    </li>
                    <li><a href="#" class="menu-item">Szukaj</a></li>
                    <li><a href="" class="menu-items"></a>

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