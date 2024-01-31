<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Naši apartmani se nalaze u neposrednoj blizini samog centra grada Vinkovaca. Lokacija je izvrsna i sve Vam je na nekoliko minuta pješke. Blizina centra grada Vinkovaca, a opet ste u mirnijem dijelu grada gdje nije nije vreva i buka i gdje će Vam biti boravak lijep i ugodan.">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="apartmani, vinkovci, sobe, odmor">
    <?php wp_head() ?>
</head>

<body <?php body_class()?>>
    <header class="header">
        <a href="<?php echo site_url('') ?>" class="header__logo">
            <img src="/wp-content/themes/domagoj/src/assets/images/logo-dark.svg" alt="nav logo" />
        </a>
        <button class="ham" aria-label="ham button" tabindex="0" aria-controls="nav" data-active="false">
            <div class="ham-line"></div>
            <div class="ham-line"></div>
            <div class="ham-line"></div>
        </button>
        <nav class="nav" data-active="false">
            <ul class="nav__list">
                <li class="nav__item"><a href="<?php echo site_url('') ?>" class="nav__link">Naslovna</a></li>
                <li class="nav__item">
                    <a href="#solution" class="nav__link">Zašto odsjesti kod nas</a>
                </li>
                <li class="nav__item">
                    <a href="#apartmani" class="nav__link">Apartmani</a>
                    <ul class="apartmani-drop-down">
                        <li><a href="<?php echo site_url('luna') ?>">Luna</a></li>
                        <li><a href="<?php echo site_url('mikela') ?>">Mikela</a></li>
                        <li><a href="<?php echo site_url('lukas') ?>">Lukas</a></li>
                        <li><a href="<?php echo site_url('sven') ?>">Sven</a></li>
                    </ul>
                </li>
                <li class="nav__item">
                    <a href="#contact" class="nav__link">Kontakt</a>
                </li>
            </ul>
        </nav>
    </header>