<?php get_header(); ?>

<h1>Publiczne Salezjańskie Liceum Ogólnokształcące w Krakowie</h1>

<header>
    <a href="#">Logo</a>
    <a href="#">Zaloguj się</a>
</header>

<nav>
    <h2>Linki</h2>
    <ul>
        <li><a href="#">Librus</a></li>
        <li><a href="#">MOL</a></li>
        <li><a href="#">Cisco</a></li>
        <li><a href="#">ECDL</a></li>
        <li><a href="#">Microsoft</a></li>
        <li><a href="#">Office 365</a></li>
    </ul>
</nav>

<nav>
    <h2>Menu Główne</h2>
    <ul>
        <li><a href="#">O szkole</a></li>
        <li><a href="#">Dla uczniów</a></li>
        <li><a href="#">Życie szkoły</a></li>
        <li><a href="#">Nauka</a></li>
        <li><a href="#">Osiągnięcia</a></li>
        <li><a href="#">Rekrutacja 2019</a></li>

    </ul>
</nav>

<section>
    <h2>Slider</h2>
</section>

<section>
    <h2>Ogłoszenia</h2>

    <?php
    
    $aktualnosci = new WP_Query(
        array(
            'cat' => '3'
        )
    );

    while($aktualnosci->have_posts())
    {
        $aktualnosci->the_post();
    ?>

    <a href="<?php echo get_permalink(); ?>">
        <h2><?php the_title(); ?></h2>
    </a>
    <small><?php the_time('d.m.Y'); ?> by <?php the_author_posts_link(); ?> </small>
    <span><?php the_category(); ?></span>

    <?php
    }
    wp_reset_postdata();
?>

</section>

<section>
    <h2>Aktualności</h2>


    <?php
    
    $aktualnosci = new WP_Query(
        array(
            'cat' => '2'
        )
    );

    while($aktualnosci->have_posts())
    {
        $aktualnosci->the_post();
    ?>

    <a href="<?php echo get_permalink(); ?>">
        <h2><?php the_title(); ?></h2>
    </a>
    <small><?php the_time('d.m.Y'); ?> by <?php the_author_posts_link(); ?> </small>
    <span><?php the_category(); ?></span>

    <?php
    }
    wp_reset_postdata();
?>



</section>

<section>
    <h2>Rekrutacja 2019 - liceum 4 letnie</h2>
    <span>Liceum - 4 letnie dla absolwentów szkół podstawowych</span>
    <nav>
        <h3>Klasy</h3>
        <ul>
            <li><a href="#">
                    <h4>Klasa A - Humanistyczno lingwistyczna</h4>
                </a></li>
            <li><a href="#">
                    <h4>Klasa B - prawniczo – ekonomiczna</h4>
                </a></li>
            <li><a href="#">
                    <h4>Klasa C - biologiczno – chemiczna</h4>
                </a></li>
            <li><a href="#">
                    <h4>Klasa D - matematyczno - chemiczna</h4>
                </a></li>
            <li><a href="#">
                    <h4>Klasa E - matematyczno – fizyczno – informatyczna</h4>
                </a></li>
        </ul>
    </nav>
    <nav>
        <h3>Linki</h3>
        <ul>
            <li><a href="#">Oferta Edukaycjna</a></li>
            <li><a href="#">Proponowane klasy pierwsze</a></li>
            <li><a href="#">Dokumenty</a></li>
            <li><a href="#">Rekrutacja elektroniczna</a></li>
    </nav>
</section>

<section>
    <h2>Rekrutacja 2019 - liceum 3 letnie</h2>
    <span>Liceum - 3 letnie dla absolwentów gimnazjów</span>
    <nav>
        <h3>Klasy</h3>
        <ul>
            <li><a href="#">
                    <h4>Klasa A - Humanistyczno lingwistyczna</h4>
                </a></li>
            <li><a href="#">
                    <h4>Klasa B - prawniczo – ekonomiczna</h4>
                </a></li>
            <li><a href="#">
                    <h4>Klasa C - biologiczno – chemiczna</h4>
                </a></li>
            <li><a href="#">
                    <h4>Klasa D - matematyczno - chemiczna</h4>
                </a></li>
            <li><a href="#">
                    <h4>Klasa E - matematyczno – fizyczno – informatyczna</h4>
                </a></li>
            <li><a href="#">
                    <h4>Klasa F - matematyczno – fizyczno – informatyczna</h4>
                </a></li>
        </ul>
    </nav>
    <nav>
        <h3>Linki</h3>
        <ul>
            <li><a href="#">Oferta Edukaycjna</a></li>
            <li><a href="#">Proponowane klasy pierwsze</a></li>
            <li><a href="#">Dokumenty</a></li>
            <li><a href="#">Rekrutacja elektroniczna</a></li>
    </nav>
</section>

<nav>
    <h3>Współpracujemy</h3>
    <ul>
        <li><a href="#">Adobe</a></li>
        <li><a href="#">Aiesec</a></li>
        <li><a href="#">British Council</a></li>
        <li><a href="#">Cisco</a></li>
        <li><a href="#">Jet brains</a></li>
        <li><a href="#">Microsoft</a></li>
        <li><a href="#">SWM</a></li>
    </ul>
</nav>


<section>

    <h2>Mapa dojazdu</h2>

    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2559.320502881506!2d20.01596401584603!3d50.09900767942842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47164553a7b355a3%3A0x20aab41b161cb13c!2zWmVzcMOzxYIgU3prw7PFgiBTYWxlemphxYRza2ljaCB3IEtyYWtvd2ll!5e0!3m2!1spl!2spl!4v1518977761913"
        width="600" height="400" frameborder="0" style="border:0" allowfullscreen=""></iframe>


</section>

<section>

    <h2>Kontakt</h2>
    <div>
        <b>Publiczne Salezjańskie Liceum Ogólnokształcące w Krakowie</b>
        <p>os. Piastów 34 31-624 Kraków</p>
        <p>Administratorem danych osobowych jest ks. mgr inż. Piotr Pawelec, Dyrektor Publicznego Salezjańskiego
            Liceum Ogólnokształcącego w Krakowie os. Piastów 34, 31-624 Kraków</p>
        <p>Inspektorem Ochrony Danych jest mgr Joanna Konik, tel: (012) 648-04-89 (w. 31).</p>
    </div>
    <div>
        <a href="12 648 04 89"></a>
        <a href="12 642 67 21"></a>
        <a href="szkolanh@salezjanie.com"></a>
    </div>
</section>

<footer>

    <nav>
        <ul>
            <h3>Salezjanie</h3>
            <li><a href="#">Wspólnota pw. Błogosławionego Augusta Czartoryskiego</a></li>
            <li><a href="#">Inspektoria Krakowska</a></li>
            <li><a href="#">Wyższe Seminarium Duchowne Towarzystwa Salezjańskiego</a></li>
            <li><a href="#">Salezjanie na świecie</a></li>
        </ul>
    </nav>

    <nav>
        <ul>
            <h3>Dla uczniów</h3>
            <li><a href="#">Olimpiady dla uczniów liceum</a></li>
            <li><a href="#">Mistrzowie matematyki</a></li>
            <li><a href="#">Egzamin maturalny</a></li>
        </ul>
    </nav>
    <nav>
        <ul>
            <h3>Dla kandydatów</h3>
            <li><a href="#">Oferta edukacyjna</a></li>
            <li><a href="#">Proponowane klasy pierwsze</a></li>
            <li><a href="#">Rekrutacja elektroniczna</a></li>
            <li><a href="#">Internaty i bursy</a></li>
            <li><a href="#">Zobacz nas na Facebooku</a></li>
        </ul>

    </nav>

    <nav>
        <ul>
            <h3>Inne</h3>
            <li><a href="#">BIP</a></li>
            <li><a href="#">Kalendarium</a></li>
            <li><a href="#">Plan lekcji</a></li>
            <li><a href="#">Dyżury nauczycieli</a></li>
            <li><a href="#">Bezpieczna szkoła</a></li>
        </ul>

    </nav>
</footer>

<?php get_footer(); ?>