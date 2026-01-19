<?php 

$naslov = "Življenje v naravi";


date_default_timezone_set("Europe/Ljubljana")
$datumVnogi = date("j. n. Y H:i");


?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $naslov; ?></title>
    <link rel="stylesheet" href="slogi.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
</head>
<body>

    <div class="okvir">
        <header>
            <img src="./background-img/bird.png" alt="Logo">

            <h1><?php echo $naslov; ?></h1>
        </header>
        <nav>
            <ul>
                <li><a href="./">Domov</a></li>
                <li><a class="active" href="./vsebina.html">Vsebina</a></li>
                <li><a href="./kontakt.html">Kontakt</a></li>
                <li><a href="./literatura.html">Literatura</a></li>
            </ul>
        </nav>
        <div class="vsebina">
            <main>
                <article>
                    <figure>
                        <img src="trumpimg.jpeg" alt="Slika prvega članka">
                        <figcaption>Podnapis na moji prvi sliki prvega članka</figcaption>
                    </figure>

                    <section>
                        <h2>Moj prvi članek</h2>
                        <time datetime="2025-12-03">3. december 2025</time>
                        <p>Kratek povzetek mojega prvega članka</p>
                        <a href="">Preberi več</a>
                    </section>

                </article>



                <article>
                    <figure>
                        <img src="trumpimg.jpeg" alt="Slika prvega članka">
                        <figcaption>Podnapis na moji prvi sliki prvega članka</figcaption>
                    </figure>

                    <section>
                        <h2>Moj prvi članek</h2>
                        <time datetime="2025-12-03">3. december 2025</time>
                        <p>Kratek povzetek mojega prvega članka</p>
                        <a href="">Preberi več</a>
                    </section>
                    
                </article>

                <article>
                    <figure>
                        <img src="trumpimg.jpeg" alt="Slika prvega članka">
                        <figcaption>Podnapis na moji prvi sliki prvega članka</figcaption>
                    </figure>

                    <section>
                        <h2>Moj prvi članek</h2>
                        <time datetime="2025-12-03">3. december 2025</time>
                        <p>Kratek povzetek mojega prvega članka</p>
                        <a href="">Preberi več</a>
                    </section>
                    
                </article>

                <article>
                    <figure>
                        <img src="trumpimg.jpeg" alt="Slika prvega članka">
                        <figcaption>Podnapis na moji prvi sliki prvega članka</figcaption>
                    </figure>

                    <section>
                        <h2>Moj prvi članek</h2>
                        <time datetime="2025-12-03">3. december 2025</time>
                        <p>Kratek povzetek mojega prvega članka</p>
                        <a href="">Preberi več</a>
                    </section>
                    
                </article>
                <article>
                    <figure>
                        <img src="trumpimg.jpeg" alt="Slika prvega članka">
                        <figcaption>Podnapis na moji prvi sliki prvega članka</figcaption>
                    </figure>

                    <section>
                        <h2>Moj prvi članek</h2>
                        <time datetime="2025-12-03">3. december 2025</time>
                        <p>Kratek povzetek mojega prvega članka</p>
                        <a href="">Preberi več</a>
                    </section>
                    
                </article>
                <article>
                    <figure>
                        <img src="trumpimg.jpeg" alt="Slika prvega članka">
                        <figcaption>Podnapis na moji prvi sliki prvega članka</figcaption>
                    </figure>

                    <section>
                        <h2>Moj prvi članek</h2>
                        <time datetime="2025-12-03">3. december 2025</time>
                        <p>Kratek povzetek mojega prvega članka</p>
                        <a href="">Preberi več</a>
                    </section>
                    
                </article>
                <article>
                    <figure>
                        <img src="trumpimg.jpeg" alt="Slika prvega članka">
                        <figcaption>Podnapis na moji prvi sliki prvega članka</figcaption>
                    </figure>

                    <section>
                        <h2>Moj prvi članek</h2>
                        <time datetime="2025-12-03">3. december 2025</time>
                        <p>Kratek povzetek mojega prvega članka</p>
                        <a href="">Preberi več</a>
                    </section>
                    
                </article>
                <article>
                    <figure>
                        <img src="trumpimg.jpeg" alt="Slika prvega članka">
                        <figcaption>Podnapis na moji prvi sliki prvega članka</figcaption>
                    </figure>

                    <section>
                        <h2>Moj prvi članek</h2>
                        <time datetime="2025-12-03">3. december 2025</time>
                        <p>Kratek povzetek mojega prvega članka</p>
                        <a href="">Preberi več</a>
                    </section>
                    
                </article>
                
            </main>

            <aside>


                <ul>
                    <li>
                        <a href="https://www.facebook.com" target="_blank">
                            <img src="/background-img/images.png" alt="slika fb">
                            <b>Facebook</b>
                        </a>
                    </li>
                </ul>

                <ul>
                    <li>
                        <a href="https://www.x.com" target="_blank">
                            <img src="background-img/x_icon.avif" alt="slika fb">
                            <b>X</b>
                        </a>
                    </li>
                </ul>

                <ul>
                    <li>
                        <a href="https://www.Instagram.com" target="_blank">
                            <img src="background-img/instagram_img.webp" alt="slika fb">
                            <b>Instagram</b>
                        </a>
                    </li>
                </ul>

                <ul>
                    <li>
                        <a href="https://www.Youtube.com" target="_blank">
                            <img src="background-img/youtube_img.png" alt="slika fb">
                            <b>Youtube</b>
                        </a>
                    </li>
                </ul>


            </aside>

        </div>
        <footer>
            &#169;
            <?php echo $datumVnogi ?>
            <a href="./">www.moja-stran.si</a>
        </footer>
    </div>


</body>
</html>