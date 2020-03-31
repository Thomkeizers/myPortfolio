<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="navigation">
            <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

            <label for="navi-toggle" class="navigation__button">
                <span class="navigation__icon">&nbsp;</span>
            </label>

            <div class="navigation__background">
                &nbsp;
            </div>

            <nav class="navigation__nav">
                <ul class="navigation__list">
                    <li class="navigation__item"><a href="" class="navigation__link"><span>01</span> Homepage</a></li>
                    <li class="navigation__item"><a href="" class="navigation__link"><span>02</span> About</a></li>
                    <li class="navigation__item"><a href="" class="navigation__link"><span>03</span> My Projects</a></li>
                    <li class="navigation__item"><a href="" class="navigation__link"><span>04</span> Contact</a></li>
                    <li class="navigation__item"><a href="" class="navigation__link"><span>05</span> Book now</a></li>
                </ul>
            </nav>
        </div>
    
    <header class="header">
        <div class="header__center">
            <h1 class="heading-primary">
                Thom Keizers<br>
                <img class="header__img" src="img/pf.jpg" alt="Author Profile Picture"><br>
            </h1>
        <div class="center-horizontal">
            <a class="header__button btn btn--white" href="#projects-section">Show portfolio &rarr;</a>
        </div>
        
        </div>
        
    </header>

    <main>
        <section class="about">
            <div class="row">
                <h2 class="heading-secondary margin-top-medium about__text">About</h2>
                <div class="col-1-of-2">
                    <div class="about__textbox margin-top-ultimate">
                        <h3 class="about__textbox--headingthree heading-tertiary">Personal info</h3>
                        <p class="about__textbox--paragraph">
                            Mijn naam is Thom Keizers. Ik ben momenteel 24 jaar oud en studeer applicatie-onwikkeling aan het ROC ter AA. Ik vind het leuk om te programmeren en ben dan ook graag bezig met vakken als web-development, applicatie programmeren etc. Ik vind back-end en front-end allebei leuk. Het lijkt me leuk om een uitdagende stage te krijgen waar je PHP frameworks als Laravel of Symphony leert. Ook wil ik SASS onder de knie krijgen. Daarom heb ik het ook in dit project geimplementeerd. 
                        </p>
                    </div>
                </div>
                <div class="col-1-of-2">
                    <div class="about__textbox margin-top-ultimate">
                        <h3 class="about__textbox--headingthree heading-tertiary">Project info</h3>
                        <p class="about__textbox--paragraph">
                            Dit project heet "My Portfolio". In dit project laat ik jullie zien wat ik tot nu toe heb gemaakt. Dit is schoolbreed. Je kunt hier projecten van web-development terugvinden, maar ook projecten van applicatieprogrammeren en EBSY. Op een interactieve manier leer je kennis maken met mijn voortgang en de producten die ik dit jaar heb afgeleverd. Ik heb in de project gebruik gemaakt van SASS. Dit is een manier van CSS schrijven waarbij je gebruik maakt van nesting, mixins en variabelen. Dit is erg leuk en ik hoop dat je er iets van kunt zien op de pagina. De animaties zijn bevoorbeeld in sass gedaan. Net als het responsive design. Dit is gedaan met een mixin.
                        </p>
                    </div>

                    <div class="center-horizontal margin-top-big">
                        <a class="header__button btn btn--white" href="about.php">More details &rarr;</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="projects" id="projects-section">
                <div class="center-horizontal u-margin-bottom-big">
                    <h2 class="heading-secondary">
                        Projects
                </div>

                <div class="row ">
                    <div class="col-1-of-3 margin-top-ultimate">
                        <div class="card">
                            <div class="card__side card__side--front ">
                                <div class="card__picture card__picture--1">
                                    &nbsp;
                                </div>
                
                                <div class="card__details">
                                    <ul>
                                        <li>Project 1</li>
                                        <li>Calculating</li>
                                        <li>PHP</li>
                                        <li>CSS</li>
                                        <li>HTML</li>
                                    </ul>
                                </div>

                            </div>
                            <div class="card__side card__side--back card__side--back-1">
                                <div class="card__cta">
                                    <div class="card__price-box">
                                        <p class="card__price-only">This is </p>
                                        <p class="card__price-value">Calculator</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-of-3 margin-top-ultimate">
                        <div class="card">
                            <div class="card__side card__side--front ">
                                <div class="card__picture card__picture--2">
                                    &nbsp;
                                </div>
                                
                                <div class="card__details">
                                    <ul>
                                        <li>Project 2</li>
                                        <li>Music Player</li>
                                        <li>PHP</li>
                                        <li>CSS</li>
                                        <li>HTML</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card__side card__side--back card__side--back-2">
                                <div class="card__cta">
                                    <div class="card__price-box">
                                        <p class="card__price-only">This is</p>
                                        <p class="card__price-value">Radio Gaga</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-of-3 margin-top-ultimate">
                        <div class="card">
                            <div class="card__side card__side--front ">
                                <div class="card__picture card__picture--3">
                                    &nbsp;
                                </div>
                                
                                <div class="card__details">
                                    <ul>
                                        <li>Project 3</li>
                                        <li>Game Store</li>
                                        <li>PHP</li>
                                        <li>CSS</li>
                                        <li>HTML</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card__side card__side--back card__side--back-3">
                                <div class="card__cta">
                                    <div class="card__price-box">
                                        <p class="card__price-only">This is</p>
                                        <p class="card__price-value">Game World</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="center-horizontal margin-top-big">
                        <a class="header__button btn btn--white" href="project.php">All projects &rarr;</a>
                    </div>
                    </div>
                </div>
        </section>

        <section class="contact">
            <div class="bg-video">
                <video class="bg-video__content" autoplay muted loop>
                    <source src="video/spacebg.mp4" type="video/mp4">
                    Your browser is not supported!
                </video>
            </div>
            <div class="margin-bottom-medium">
            <h2 class="heading-secondary center-horizontal">Get in touch</h2>
            </div>

            <div class="center-horizontal">
                        <a class="header__button btn btn--white" href="contact.php">Contact information &rarr;</a>
            </div>
        </section>
    </main>

    <footer class="footer">
            <div class="footer__logo-box">
                <img src="img/pf.jpg" alt="Full logo" class="footer__logo">
            </div>
            <div class="row">
                <div class="col-1-of-2">
                    <div class="footer__navigation">
                        <ul class="footer__list">
                            <li class="footer__item">
                                <a href="#" class="footer__link">Company</a>
                                <a href="#" class="footer__link">Contact</a>
                                <a href="#" class="footer__link">Careers</a>
                                <a href="#" class="footer__link">Privacy policy</a>
                                <a href="#" class="footer__link">Terms</a>

                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-1-of-2">
                    <p class="footer__copyright">
                        Built by <a href="#" class="footer__link">Thom Keizers</a> for the improvement of his CSS skills. <a href="https://udemy.com" class="footer__link">Udemy Sass Skills.</a> Copyright &copy; by Thom Keizers. You are 100% allowed to use this webpage for both personal and commercial use, but NOT to claim it as your own design.
                    </p>
                </div>
            </div>
        </footer>
    
    
</body>
</html>