<!DOCTYPE html>
<html lang='en-EN' class='no-js'>
    <head>
        <meta charset='utf-8'>
        <meta name='description' content='Discover my work, front-end development of static and dynamic websites with WordPress.'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>

        <title>Portfolio - Elisabeth Hamel &bull; Front-End Developper</title>

        <meta name='author' content='Elisabeth Hamel'>

        <meta property='og:title' content='Elisabeth Hamel &bull; Portfolio'>
        <meta property='og:type' content='website'>
        <meta property='og:url' content='http://www.e-hamel.com'>
        <meta property='og:image' content='http://www.e-hamel.com/img/logo.svg'>

        <link rel='stylesheet' href='css/main.css'>

        <script async>document.getElementsByTagName('html')[0].className = 'js';</script>
    </head>

    <body>
        <header role='banner' id='header'>
            <nav role='navigation'>
                <!--<a href='./' class='logo'>Elisabeth <span>Hamel</span></a>-->
                <a href='./' class='logo on'>
                    <?php include('includes/logo.svg'); ?>
                </a>
                <ul>
                    <li>
                        <a href='portfolio.php' class='active'>
                            Portfolio<svg class='icon'><use xlink:href='#icon-portfolio'/></svg>
                        </a>
                    </li>
                    <li>
                        <a href='about.php'>
                            About<svg class='icon'><use xlink:href='#icon-about'/></svg>
                        </a>
                    </li>
                    <li>
                        <a href='contact.php'>
                            Contact<svg class='icon icon-contact'><use xlink:href='#icon-contact'/></svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>

        <main role='main' id='main'>
            <div class='container'>
                <h1 class='anim-elt'>Portfolio</h1>

                <ul class='portfolio-list anim-elt' id='portfolio'>

                    <li>
                        <time datetime='2017' class='anim-elt'>2017</time>
                        <ul>
                            <li class='anim-elt'>
                                <h2>Thinkovery</h2>
                                <span>Stéréosuper</span>
                                <p>HTML, CSS [SASS], JavaScript [jQuery, GreenSock] <br>WordPress [theme&nbsp;development]</p>
                                <a href='https://thinkovery.com' target='_blank' class='btn-ext'>
                                    <span data-text='Check it out'>Check it out</span>
                                    <svg class='icon'><use xlink:href='#icon-link'/></svg>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <time datetime='2016' class='anim-elt'>2016</time>
                        <ul>
                            <li class='anim-elt'>
                                <h2>Stéréosuper</h2>
                                <span>Stéréosuper</span>
                                <p>HTML [Twig], CSS [SASS], JavaScript [jQuery, GreenSock, BarbaJS]</p>
                                <a href='http://www.stereosuper.fr' target='_blank' class='btn-ext'>
                                    <span data-text='Check it out'>Check it out</span>
                                    <svg class='icon'><use xlink:href='#icon-link'/></svg>
                                </a>
                            </li>
                            <li class='anim-elt'>
                                <h2>Leon Grosse</h2>
                                <span>Stéréosuper</span>
                                <p>HTML, CSS [SASS], JavaScript [jQuery, GreenSock, Mapbox]</p>
                                <a href='http://leongrosse.fr' target='_blank' class='btn-ext'>
                                    <span data-text='Check it out'>Check it out</span>
                                    <svg class='icon'><use xlink:href='#icon-link'/></svg>
                                </a>
                            </li>
                            <li class='anim-elt'>
                                <h2>AlvenCapital</h2>
                                <span>Stéréosuper</span>
                                <p>HTML, CSS [SASS], JavaScript [jQuery, GreenSock] <br>WordPress [theme&nbsp;development]</p>
                                <a href='http://www.alvencapital.com' target='_blank' class='btn-ext'>
                                    <span data-text='Check it out'>Check it out</span>
                                    <svg class='icon'><use xlink:href='#icon-link'/></svg>
                                </a>
                            </li>
                            <li class='anim-elt'>
                                <h2>La Belle Boîte</h2>
                                <span>Stéréosuper</span>
                                <p>HTML, CSS [LESS], JavaScript [GreenSock] <br>WordPress [theme&nbsp;development]</p>
                                <a href='http://www.labelleboite.fr' target='_blank' class='btn-ext'>
                                    <span data-text='Check it out'>Check it out</span>
                                    <svg class='icon'><use xlink:href='#icon-link'/></svg>
                                </a>
                            </li>
                            <li class='anim-elt'>
                                <h2>Nantes à l'Eau</h2>
                                <span>Freelance</span>
                                <p>HTML, CSS, JavaScript [jQuery], WordPress</p>
                                <a href='http://nantesaleau.com' target='_blank' class='btn-ext'>
                                    <span data-text='Check it out'>Check it out</span>
                                    <svg class='icon'><use xlink:href='#icon-link'/></svg>
                                </a>
                            </li>
                            <li class='anim-elt'>
                                <h2>Akeneo</h2>
                                <span>Stéréosuper</span>
                                <p>HTML, CSS [LESS], JavaScript [jQuery, GreenSock] <br>WordPress [Multilingual, theme&nbsp;development]</p>
                                <a href='http://www.akeneo.com' target='_blank' class='btn-ext'>
                                    <span data-text='Check it out'>Check it out</span>
                                    <svg class='icon'><use xlink:href='#icon-link'/></svg>
                                </a>
                            </li>
                            <li class='anim-elt'>
                                <h2>Encre Sèche</h2>
                                <span>Freelance</span>
                                <p>HTML, CSS, WordPress</p>
                                <a href='http://www.encreseche.com/' target='_blank' class='btn-ext'>
                                    <span data-text='Check it out'>Check it out</span>
                                    <svg class='icon'><use xlink:href='#icon-link'/></svg>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <time datetime='2015' class='anim-elt'>2015</time>
                        <ul>
                            <li class='anim-elt'>
                                <h2>Institut d'Avignon</h2>
                                <span>Stéréosuper</span>
                                <p>HTML, CSS [LESS], JavaScript [jQuery, GreenSock] <br>WordPress [theme&nbsp;development]</p>
                                <a href='http://institutdavignon.fr' target='_blank' class='btn-ext'>
                                    <span data-text='Check it out'>Check it out</span>
                                    <svg class='icon'><use xlink:href='#icon-link'/></svg>
                                </a>
                            </li>
                            <li class='anim-elt'>
                                <h2>Wisembly Success Center</h2>
                                <span>Stéréosuper</span>
                                <p>HTML, CSS [LESS], JavaScript [jQuery, GreenSock] <br>WordPress [multilingual, theme&nbsp;development, AJAX]</p>
                                <a href='http://success.wisembly.com/' target='_blank' class='btn-ext'>
                                    <span data-text='Check it out'>Check it out</span>
                                    <svg class='icon'><use xlink:href='#icon-link'/></svg>
                                </a>
                            </li>
                            <li class='anim-elt'>
                                <h2>Wisembly</h2>
                                <span>Stéréosuper</span>
                                <p>HTML, CSS [LESS], JavaScript [jQuery, GreenSock] <br>WordPress [multilingual, theme&nbsp;development]</p>
                                <a href='http://wisembly.com/' target='_blank' class='btn-ext'>
                                    <span data-text='Check it out'>Check it out</span>
                                    <svg class='icon'><use xlink:href='#icon-link'/></svg>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <time datetime='2014' class='anim-elt'>2014</time>
                        <ul>
                            <li class='anim-elt'>
                                <h2>REZOrue</h2>
                                <span>Freelance</span>
                                <p>HTML, CSS, JavaScript [jQuery] <br>WordPress [multilingual]</p>
                                <a href='http://www.rezorue.com/' target='_blank' class='btn-ext'>
                                    <span data-text='Check it out'>Check it out</span>
                                    <svg class='icon'><use xlink:href='#icon-link'/></svg>
                                </a>
                            </li>
                            <li class='anim-elt'>
                                <h2>Serenpedia</h2>
                                <span>Intuiti</span>
                                <p>WordPress [multilingual]</p>
                                <a href='http://serenpedia.com/' target='_blank' class='btn-ext'>
                                    <span data-text='Check it out'>Check it out</span>
                                    <svg class='icon'><use xlink:href='#icon-link'/></svg>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </main>

        <?php include('includes/footer.html'); ?>

        <script src='js/main.js' defer></script>
    </body>
</html>
