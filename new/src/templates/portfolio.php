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
                    <li><a href='portfolio.php' class='active'>Portfolio</a></li>
                    <li><a href='about.php'>About</a></li>
                    <li><a href='contact.php'>Contact</a></li>
                </ul>
            </nav>
        </header>

        <main role='main' id='main'>
            <div class='container'>
                <h1 class='anim-elt'>Portfolio</h1>

                <ul class='portfolio-list anim-elt' id='portfolio'>
                    <li>
                        <time datetime='2016' class='anim-elt'>2016</time>
                        <ul>
                            <li class='anim-elt'>
                                <a href='http://leongrosse.fr' target='_blank' data-text='Leon Grosse'>
                                    <span>Leon Grosse</span>
                                </a>
                                <span>Stéréosuper</span>
                                <p>HTML, CSS [SASS], JavaScript [jQuery, GreenSock, Mapbox] <br>Gulp</p>
                            </li>
                            <li class='anim-elt'>
                                <a href='http://www.alvencapital.com' target='_blank' data-text='AlvenCapital'>
                                    <span>AlvenCapital</span>
                                </a>
                                <span>Stéréosuper</span>
                                <p>HTML, CSS [SASS], JavaScript [jQuery, GreenSock] <br>WordPress [theme&nbsp;development]</p>
                            </li>
                            <li class='anim-elt'>
                                <a href='http://www.labelleboite.fr' target='_blank' data-text='La Belle Boîte'>
                                    <span>La Belle Boîte</span>
                                </a>
                                <span>Stéréosuper</span>
                                <p>HTML, CSS [LESS], JavaScript [GreenSock] <br>WordPress [theme&nbsp;development]</p>
                            </li>
                            <li class='anim-elt'>
                                <a href='http://nantesaleau.com' target='_blank' data-text="Nantes à l'Eau">
                                    <span>Nantes à l'Eau</span>
                                </a>
                                <span>Freelance</span>
                                <p>HTML, CSS, JavaScript [jQuery] <br>WordPress</p>
                            </li>
                            <li class='anim-elt'>
                                <a href='http://www.akeneo.com' target='_blank' data-text='Akeneo'>
                                    <span>Akeneo</span>
                                </a>
                                <span>Stéréosuper</span>
                                <p>HTML, CSS [LESS], JavaScript [jQuery, GreenSock] <br>WordPress [Multilingual, theme&nbsp;development]</p>
                            </li>
                            <li class='anim-elt'>
                                <a href='http://www.encreseche.com/' target='_blank' data-text='Encre Sèche'>
                                    <span>Encre Sèche</span>
                                </a>
                                <span>Freelance</span>
                                <p>HTML, CSS <br>WordPress</p>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <time datetime='2015' class='anim-elt'>2015</time>
                        <ul>
                            <li class='anim-elt'>
                                <a href='http://institutdavignon.fr' target='_blank' data-text="Institut d'Avignon">
                                    <span>Institut d'Avignon</span>
                                </a>
                                <span>Stéréosuper</span>
                                <p>HTML, CSS [LESS], JavaScript [jQuery, GreenSock] <br>WordPress [theme&nbsp;development]</p>
                            </li>
                            <li class='anim-elt'>
                                <a href='http://success.wisembly.com/' target='_blank' data-text='Wisembly Success Center'>
                                    <span>Wisembly Success Center</span>
                                </a>
                                <span>Stéréosuper</span>
                                <p>HTML, CSS [LESS], JavaScript [jQuery, GreenSock] <br>WordPress [multilingual, theme&nbsp;development]</p>
                            </li>
                            <li class='anim-elt'>
                                <a href='http://wisembly.com/' target='_blank' data-text='Wisembly'>
                                    <span>Wisembly</span>
                                </a>
                                <span>Stéréosuper</span>
                                <p>HTML, CSS [LESS], JavaScript [jQuery, GreenSock] <br>WordPress [multilingual, theme&nbsp;development]</p>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <time datetime='2014' class='anim-elt'>2014</time>
                        <ul>
                            <li class='anim-elt'>
                                <a href='http://www.rezorue.com/' target='_blank' data-text='REZOrue'>
                                    <span>REZOrue</span>
                                </a>
                                <span>Freelance</span>
                                <p>HTML, CSS, JavaScript [jQuery] <br>WordPress [multilingual]</p>
                            </li>
                            <li class='anim-elt'>
                                <a href='http://serenpedia.com/' target='_blank' data-text='Serenpedia'>
                                    <span>Serenpedia</span>
                                </a>
                                <span>Intuiti</span>
                                <p>WordPress [multilingual]</p>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <time datetime='2013' class='anim-elt'>2013</time>
                        <ul>
                            <li class='anim-elt'>
                                <a href='https://constructionlaverendrye.com/' target='_blank' data-text='La Vérendrye Construction'>
                                    <span>La Vérendrye Construction</span>
                                </a>
                                <span>Vacarm</span>
                                <p>HTML, CSS, JavaScript [jQuery] <br>WordPress</p>
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
