<?php

$octopus = isset($_COOKIE['octopus']) ? true : false;

?><!DOCTYPE html>
<html lang='en-EN' class='no-js'>
    <head>
        <meta charset='utf-8'>
        <meta name='description' content='Elisabeth Hamel, Front-End & WordPress Developper in Nantes, France'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>

        <title>Elisabeth Hamel &bull; Front-End Developper</title>

        <meta name='keywords' content='développeur web, développeur front-end, développeur, intégrateur, responsive, web design, html, css, javascript, jquery, php, Elisabeth, Hamel, freelance, auto-entrepreneur'>
        <meta name='author' content='Elisabeth Hamel'>

        <meta property='og:title' content='Elisabeth Hamel &bull; Portfolio'>
        <meta property='og:type' content='website'>
        <meta property='og:url' content='http://www.e-hamel.com'>
        <meta property='og:image' content='http://www.e-hamel.com/img/logo.svg'>

        <link rel='stylesheet' href='css/main.css'>

        <script async>document.getElementsByTagName('html')[0].className = 'js';</script>
    </head>

    <body class='home'>
        <header role='banner' id='header' <?php if(!$octopus) echo "class='off'"; ?>>
            <nav role='navigation'>
                <!--<a href='./' class='logo'>Elisabeth <span>Hamel</span></a>-->
                <a href='./' class='logo' title='Back to home'>
                    <?php include('includes/logo.svg'); ?>
                </a>
                <ul>
                    <li>
                        <a href='portfolio.php' title='See my references'>
                            Portfolio<svg class='icon'><use xlink:href='#icon-portfolio'/></svg>
                        </a>
                    </li>
                    <li>
                        <a href='about.php' title='About me'>
                            About<svg class='icon'><use xlink:href='#icon-about'/></svg>
                        </a>
                    </li>
                    <li>
                        <a href='contact.php' title='Contact informations'>
                            Contact<svg class='icon icon-contact'><use xlink:href='#icon-contact'/></svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>

        <main role='main' id='main'>
            <div class='container'>
                <div id='particles'></div>

                <section>
                    <h1 class='anim-elt'>Hello!</h1>
                    <p class='anim-elt'>I am Elisabeth Hamel, a <strong>Front-End &amp; WordPress Developper</strong> currently working at <a href='http://stereosuper.fr' target='_blank'>Stéréosuper</a>, based in Nantes (France).</p>
                    <p class='anim-elt'>I enjoy working on the web and speaking the languages that make it alive.</p>
                    <a href='about.php' class='btn anim-elt'>More about me</a>
                </section>

                <section>
                    <h2 class='anim-elt'>Latest work</h2>
                    <ul class='work-list' id='portfolio'>
                        <li class='anim-elt'>
                            <a href='https://thinkovery.com' target='_blank' data-text='Thinkovery' title='Go on Thinkovery website'>Thinkovery</a>
                            <span>Stéréosuper</span>
                        </li>
                        <li class='anim-elt'>
                            <a href='http://www.stereosuper.fr' target='_blank' data-text='Stéréosuper' title='Go on Stéréosuper website'>Stéréosuper</a>
                            <span>Stéréosuper</span>
                        </li>
                        <li class='anim-elt'>
                            <a href='http://leongrosse.fr' target='_blank' data-text='Leon Grosse' title='Go on Leon Grosse website'>Leon Grosse</a>
                            <span>Stéréosuper</span>
                        </li>
                        <li class='anim-elt'>
                            <a href='http://www.alvencapital.com' target='_blank' data-text='AlvenCapital' title='Go on AlvenCapital website'>AlvenCapital</a>
                            <span>Stéréosuper</span>
                        </li>
                    </ul>
                    <a href='portfolio.php' class='btn anim-elt'>All portfolio</a>
                </section>

                <section>
                    <h2 class='anim-elt'>Find&hellip;</h2>
                    <ul>
                        <li class='anim-elt'>My <a href='https://github.com/ElisabethStereosuper' target='_blank' title='Check my GitHub account'>GitHub</a> work and <a href='https://codepen.io/elisabeth_hamel/' target='_blank' title='Check my Codepen account'>Codepen</a> experiments,</li>
                        <li class='anim-elt'>Some tech (occasional) tweets on <a href='https://twitter.com/Elisabeth_Hamel' target='_blank' title='Check my Twitter account'>Twitter</a>,</li>
                        <li class='anim-elt'>A few answers and questions on <a href='https://stackoverflow.com/users/6654864/shwarp?tab=profile' target='_blank' title='Check my Stackoverflow account'>Stackoverflow</a>,</li>
                        <li class='anim-elt'>My <a href='https://www.linkedin.com/in/elisabeth-hamel-7757b85a' target='_blank' title='Check my LinkedIn account'>LinkedIn</a> professionnal profile</li>
                    </ul>
                    <a href='contact.php' class='btn anim-elt'>Get in touch</a>
                </section>

                <div class='logo-home' id='logo'><?php include('includes/logo.svg'); ?></div>

            </div>
        </main>

        <?php include('includes/footer.html'); ?>

        <script src='js/main.js' defer></script>
    </body>
</html>
