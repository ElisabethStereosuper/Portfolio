<?php

$octopus = isset($_COOKIE['octopus']) ? true : false;

?><!DOCTYPE html>
<html lang='en' class='no-js'>
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

        <script>document.getElementsByTagName('html')[0].className = 'js';</script>
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

                <div class='logo-home' id='logo'>
                    <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 109.5 98.2'><path fill='#3CB8B7' d='M.6 51.2c1.5-4.8 4.4-8.6 8.8-11.1 1.6-.9 3.9-.5 5.2.9 1.4 1.6.6 3-.3 4.4-.3.5-.8 1-1.3 1.4-5.2 5.3-4.8 12.3 1.2 16.8 3.3 2.4 7 3.2 10.9 1.4 3.8-1.8 6.5-4.4 6.8-8.9.3-3.7-.4-7.1-2.1-10.4C28.3 42.9 27 40 26 37c-4-13-.2-24.7 11-31.6C48.6-1.8 60.7-1.7 72.4 5c9.3 5.3 14 13.6 13.5 24.5-.3 6.7-3.1 12.6-7 18.1-.8 1.2-1.4 2.4-1.7 3.8-2.1 8.7 4.4 16.1 12.9 14.5 4.5-.8 7.4-3.6 8.9-7.9 1.4-4.1.2-7.7-2.9-10.7-.8-.8-1.5-1.7-2-2.7-.8-1.9-.3-3.3 1.5-4.2 1.5-.7 2.9-.7 4.4.2 4.1 2.4 6.5 6.1 8.4 10.2 3 8.3-1.5 15.3-2.6 17.1-5.2 8.6-15.1 11.4-23.7 10.5-.8-.1-1.6-.2-2.7 0 .9 1.1 1.6 2.1 2.4 2.9 3.7 3.8 7.5 7.4 13.1 7.7 1.7.1 3.4-.2 5-.1 2.9.1 4.2 2.7 2.8 5.2-1.1 2-2.8 3.2-4.9 3.6-4 .9-8.1.9-12-.6-9.5-3.6-17.3-9.6-23.6-17.5-1.8-2.3-4-3.9-7-4.4-4.2-.6-6.6 2.1-9 4.9-7.6 8.9-16.4 16-28.3 17.8-4.2.7-8.5.1-11.4-3.8-.9-1.2-1.2-2.5-.4-3.9.8-1.3 2-1.8 3.5-1.9 1.7-.1 3.3.7 5 .4 6.7-1.2 11-5.7 15.3-11.1-4 .7-7.5.7-11 .1C11.3 76.3 5.5 72.5 2 65.5c-.8-1.8-3-6.7-1.4-14.3z' class='body'/><linearGradient id='a1' x1='12.713' x2='6.167' y1='59.499' y2='50.291' gradientUnits='userSpaceOnUse' gradientTransform='matrix(1 0 0 -1 0 100)'><stop offset='0' stop-color='#204656'/><stop offset='1' stop-color='#3CB8B7'/></linearGradient><path fill='url(#a1)' d='M1.3 49.3s2.1-6.1 8.5-9.4c0 0 3.5-1.4 5.4 2 0 0 .8 1.3-1.2 3.9 0 0-4 3.6-4.4 7.2' class='g-path'/><linearGradient id='b1' x1='95.667' x2='101.623' y1='59.168' y2='52.038' gradientUnits='userSpaceOnUse' gradientTransform='matrix(1 0 0 -1 0 100)'><stop offset='0' stop-color='#204656'/><stop offset='1' stop-color='#3CB8B7'/></linearGradient><path fill='url(#b1)' d='M99.1 51.9s-.4-2.2-3.6-5.2c0 0-2.3-2.5-1.7-4.5 0 0 .8-2.5 4.4-2.3 0 0 3.8.4 8.2 7.1' class='g-path'/><linearGradient id='c1' x1='9.688' x2='19.76' y1='6.267' y2='8.339' gradientUnits='userSpaceOnUse' gradientTransform='matrix(1 0 0 -1 0 100)'><stop offset='0' stop-color='#204656'/><stop offset='1' stop-color='#3CB8B7'/></linearGradient><path fill='url(#c1)' d='M25 96.1s-14.7 6.4-19.1-3.2c0 0-1-3.6 3.1-4.5 0 0 .7-.4 5.1.5 0 0 4.5-.5 9.2-4' class='g-path'/><linearGradient id='d1' x1='101.175' x2='87.304' y1='5.225' y2='8.111' gradientUnits='userSpaceOnUse' gradientTransform='matrix(1 0 0 -1 0 100)'><stop offset='.002' stop-color='#DC2924'/><stop offset='.182' stop-color='#CA6143'/><stop offset='.4' stop-color='#AF8C6B'/><stop offset='.599' stop-color='#8FA48C'/><stop offset='.771' stop-color='#6CB0A4'/><stop offset='.911' stop-color='#4DB6B2'/><stop offset='1' stop-color='#3CB8B7'/></linearGradient><path fill='url(#d1)' d='M89.4 87.5s2.6 1.2 4.7 1.4c0 0 1.7.3 4.9-.1 0 0 3.6-.3 4.3 2.3 0 0 1.1 4-4.4 6.2 0 0-6.7 2.5-13.5-.4-6.7-2.9-7.7-4-8.4-4.2' class='g-path'/><path d='M45.8 35.7c-3 0-5.5 2.5-5.5 5.5s2.4 5.5 5.3 5.5c3.1 0 5.6-2.4 5.7-5.4 0-3-2.5-5.6-5.5-5.6z' class='eye e1'/><path d='M64.6 38.7c-2 0-4.4 2.5-4.4 4.5 0 2.2 2.2 4.4 4.5 4.3 2.3 0 4.4-2.2 4.3-4.4-.1-2.2-2.3-4.4-4.4-4.4z' class='eye e2'/></svg>
                </div>

            </div>
        </main>

        <?php include('includes/footer.html'); ?>

        <script src='js/main.js' defer></script>
    </body>
</html>
