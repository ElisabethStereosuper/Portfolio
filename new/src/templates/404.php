<!DOCTYPE html>
<html lang='en' class='no-js'>
    <head>
        <meta charset='utf-8'>
        <meta name='description' content='Are you lost dude ?'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>

        <title>404 - Elisabeth Hamel &bull; Front-End Developper</title>

        <meta name='author' content='Elisabeth Hamel'>

        <meta property='og:title' content='Elisabeth Hamel &bull; Portfolio'>
        <meta property='og:type' content='website'>
        <meta property='og:url' content='http://www.e-hamel.com'>
        <meta property='og:image' content='http://www.e-hamel.com/img/logo.svg'>

        <link rel='stylesheet' href='css/main.css'>

        <script>document.getElementsByTagName('html')[0].className = 'js';</script>
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
                        <a href='portfolio.php'>
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
                <div id='particles'></div>

                <h1 class='anim-elt'>404!</h1>
                <p class='anim-elt'>
                    I'm sorry, this page doesn't exist anymore (or never did)!<br>
                    Yes, the octopus is sad too... :(
                </p>

                <a href='./' class='btn anim-elt'>Back to home</a>

                <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 109.5 98.2' id='logo-404' class='logo-404 anim-elt'>
                    <path d='M.6 51.2c1.5-4.8 4.4-8.6 8.8-11.1 1.6-.9 3.9-.5 5.2.9 1.4 1.6.6 3-.3 4.4-.3.5-.8 1-1.3 1.4-5.2 5.3-4.8 12.3 1.2 16.8 3.3 2.4 7 3.2 10.9 1.4 3.8-1.8 6.5-4.4 6.8-8.9.3-3.7-.4-7.1-2.1-10.4C28.3 42.9 27 40 26 37c-4-13-.2-24.7 11-31.6C48.6-1.8 60.7-1.7 72.4 5c9.3 5.3 14 13.6 13.5 24.5-.3 6.7-3.1 12.6-7 18.1-.8 1.2-1.4 2.4-1.7 3.8-2.1 8.7 4.4 16.1 12.9 14.5 4.5-.8 7.4-3.6 8.9-7.9 1.4-4.1.2-7.7-2.9-10.7-.8-.8-1.5-1.7-2-2.7-.8-1.9-.3-3.3 1.5-4.2 1.5-.7 2.9-.7 4.4.2 4.1 2.4 6.5 6.1 8.4 10.2 3 8.3-1.5 15.3-2.6 17.1-5.2 8.6-15.1 11.4-23.7 10.5-.8-.1-1.6-.2-2.7 0 .9 1.1 1.6 2.1 2.4 2.9 3.7 3.8 7.5 7.4 13.1 7.7 1.7.1 3.4-.2 5-.1 2.9.1 4.2 2.7 2.8 5.2-1.1 2-2.8 3.2-4.9 3.6-4 .9-8.1.9-12-.6-9.5-3.6-17.3-9.6-23.6-17.5-1.8-2.3-4-3.9-7-4.4-4.2-.6-6.6 2.1-9 4.9-7.6 8.9-16.4 16-28.3 17.8-4.2.7-8.5.1-11.4-3.8-.9-1.2-1.2-2.5-.4-3.9.8-1.3 2-1.8 3.5-1.9 1.7-.1 3.3.7 5 .4 6.7-1.2 11-5.7 15.3-11.1-4 .7-7.5.7-11 .1C11.3 76.3 5.5 72.5 2 65.5c-.8-1.8-3-6.7-1.4-14.3z' class='body'/>
                    <path d='M45.8 35.7c-3 0-5.5 2.5-5.5 5.5s2.4 5.5 5.3 5.5c3.1 0 5.6-2.4 5.7-5.4 0-3-2.5-5.6-5.5-5.6z' class='eye-full'/>
                    <path d='M64.6 38.7c-2 0-4.4 2.5-4.4 4.5 0 2.2 2.2 4.4 4.5 4.3 2.3 0 4.4-2.2 4.3-4.4-.1-2.2-2.3-4.4-4.4-4.4z' class='eye-full'/>
                    <path d='M45.8 35.7c-3 0-5.5 2.5-5.5 5.5s2.4 5.5 5.3 5.5c3.1 0 5.6-2.4 5.7-5.4 0-3-2.5-5.6-5.5-5.6z' class='eye-center'/>
                    <path d='M64.6 38.7c-2 0-4.4 2.5-4.4 4.5 0 2.2 2.2 4.4 4.5 4.3 2.3 0 4.4-2.2 4.3-4.4-.1-2.2-2.3-4.4-4.4-4.4z'' class='eye-center'/>
                </svg>

            </div>
        </main>

        <?php include('includes/footer.html'); ?>

        <script src='js/main.js' defer></script>
    </body>
</html>