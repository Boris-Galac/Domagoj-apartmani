<?php get_header() ?>
<main class="main home-main">
    <!-- HERO -->
    <section class="hero">
        <div class="container">
            <div class="hero__wrapper">
                <div class="hero__main-focus">
                    <div class="hero__first-col">
                        <div class="hero__headline-wrapper">
                            <h1 class="hero__headline">
                                Odmorite i uživajte u našim udobnim apartmanima
                            </h1>
                            <p class="hero__subheadine">
                                Odaberite za odmor jedan od naša četiri apartmana u
                                neposrednoj blizini samog centra grada Vinkovaca i nećete
                                požaliti
                            </p>
                        </div>
                        <a href="#apartmani" class="hero__cta">Pogledajte naše apartmane</a>
                    </div>
                </div>
                <div class="hero__second-focus">
                    <picture>
                        <source media="(min-width:800px)"
                            srcset="/wp-content/themes/domagoj/src/assets/images/hero-images-img-vertical.png" />
                        <img class="hero__images"
                            src="/wp-content/themes/domagoj/src/assets/images/hero-images-img-horizontal.png"
                            alt="hero images of apartments" />
                    </picture>
                </div>
            </div>
        </div>
    </section>
    <!-- SOLUTION -->
    <section class="solution p-block-6" id="solution">
        <div class="container">
            <div class="solution__wrapper">
                <h2 class="h2-heading solution__heading h2-heading--dark">
                    Zašto odsjesti kod nas
                </h2>
                <div class="solution__body-text-wrapper">
                    <p class="dark-text">
                        Naši apartmani se nalaze u neposrednoj blizini samog centra
                        grada Vinkovaca. Lokacija je izvrsna i sve Vam je na nekoliko
                        minuta pješke. Blizina centra grada Vinkovaca, a opet ste u
                        mirnijem dijelu grada gdje nije nije vreva i buka i gdje će Vam
                        biti boravak lijep i ugodan.
                    </p>
                    <p class="dark-text">
                        U neposrednoj blizini nalaze se trgovina, pekara, caffe bar i
                        restoran. Također da istaknemo, u najpopularnijem restoranu u
                        gradu ”Vatikan” imate 15% popusta na hranu kao gosti naših
                        apartmana.
                    </p>
                </div>
                <img class="solution__img" src="/wp-content/themes/domagoj/src/assets/images/table-img.png"
                    alt="table with fruits" />
            </div>
        </div>
    </section>
    <!-- APARTMANI -->
    <section class="apartmani p-block-6" id="apartmani">
        <div class="container">
            <div class="apartmani__header">
                <h2 class="h2-heading apartmani__heading h2-heading--bright">
                    Apartmani
                </h2>
                <div class="apartmani__wrapper">
                    <p class="apartmani__paragraph bright-text">
                        U ponudi imamo četiri apartmana od kojih je jedan studio
                        apartman. Apartmani se sastoje od kuhinje, kupaone i dnevnog
                        boravka. Oni su klimatizirani, potpuno opremljeni (kuhinjski
                        pribor, glačalo, daska za peglanje, sušilo za kosu, perilica
                        rublja), te prilagođeni za boravak od dvije do četiri osobe.
                        Superbrzi internet i TV sa više od 100 programa.
                    </p>
                </div>
            </div>
            <div class="apartmani__body">
                <a href="<?php echo site_url('luna') ?>">
                    <figure class="apartmani__thumbnail">
                        <img src="/wp-content/themes/domagoj/src/assets/images/luna-apartman-img.png"
                            class="apartmani__overlay" />
                        <h2 class="h2-heading apartmani-thumbnail__heading">Luna</h2>
                    </figure>
                </a>
                <a href="<?php echo site_url('mikela') ?>">
                    <figure class="apartmani__thumbnail">
                        <img src="/wp-content/themes/domagoj/src/assets/images/mikela-apartman-img.png"
                            class="apartmani__overlay" />
                        <h2 class="h2-heading apartmani-thumbnail__heading">Mikela</h2>
                    </figure>
                </a>
                <a href="<?php echo site_url('sven') ?>">
                    <figure class="apartmani__thumbnail">
                        <img src="/wp-content/themes/domagoj/src/assets/images/sven-apartman-img.png"
                            class="apartmani__overlay" />
                        <h2 class="h2-heading apartmani-thumbnail__heading">Sven</h2>
                    </figure>
                </a>
                <a href="<?php echo site_url('lukas') ?>">
                    <figure class="apartmani__thumbnail">
                        <img src="/wp-content/themes/domagoj/src/assets/images/lukas-apartman-img.png"
                            class="apartmani__overlay" />
                        <h2 class="h2-heading apartmani-thumbnail__heading">Lukas</h2>
                    </figure>
                </a>
            </div>
        </div>
    </section>
    <!-- CONTACT -->
    <?php get_template_part('template-parts/content', 'contact') ?>
</main>
<?php get_footer() ?>