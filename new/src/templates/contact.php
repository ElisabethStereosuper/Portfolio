<!DOCTYPE html>
<html lang='en-EN' class='no-js'>
    <head>
        <meta charset='utf-8'>
        <meta name='description' content='Learn more about me, my background and skills.'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>

        <title>Contact - Elisabeth Hamel &bull; Front-End Developper</title>

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
                    <li><a href='portfolio.php'>Portfolio</a></li>
                    <li><a href='about.php'>About</a></li>
                    <li><a href='contact.php' class='active'>Contact</a></li>
                </ul>
            </nav>
        </header>

        <main role='main' id='main'>
            <div class='container'>
                <section>
                    <h1 class='anim-elt'>Contact</h1>
                    <p class='anim-elt'>You want to work with me, you have a question, you just want to say hi ? Don't hesitate to drop me a message by filling this form.</p>

                    <form action='' method='POST' id='contactForm'>
                        <div class='field'>
                            <input type='text' name='name' id='name' required placeholder='Peter Griffin' class='anim-elt'>
                            <label for='name' class='anim-elt'>Your name<sup>*</sup></label>
                        </div>
                        <div class='field'>
                            <input type='email' name='email' id='email' required placeholder='ekiekiekipateng@knights.ni' class='anim-elt'>
                            <label for='email' class='anim-elt'>Your email<sup>*</sup></label>
                        </div>
                        <div class='field'>
                            <input type='text' name='movie' id='movie' placeholder='Mars Attack' class='anim-elt' value=''>
                            <label for='movie' class='anim-elt'>Your favourite movie</label>
                        </div>
                        <div class='field'>
                            <textarea name='message' id='message' required placeholder='Hello there !' class='anim-elt'></textarea>
                            <label for='message' class='anim-elt'>Your message<sup>*</sup></label>
                        </div>
                        <button type='submit' for='contactForm' class='btn anim-elt'>Send</button>
                    </form>

                    <p class='small-text anim-elt'>Fields marked with a * are required.</p>

                    <p class='anim-elt'>Believe it or not, I kind of enjoy styling forms! But if you don't feel comfortable using it, you can reach me on <a href='mailto:elisabethhamel@outlook.com' title='Send me a message'>elisabethhamel@outlook.com</a>.</p>
                </section>
            </div>
        </main>

        <?php include('includes/footer.html'); ?>

        <script src='js/main.js' defer></script>
    </body>
</html>
