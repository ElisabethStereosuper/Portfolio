<?php

iconv_set_encoding('internal_encoding', 'UTF-8');

$error = false;
$success = false;
$errorName = false;
$errorMail = false;
$errorPhone = false;
$errorMsg = false;
$errorSend = false;

$name = isset($_POST['name']) ? strip_tags(stripslashes($_POST['name'])) : '';
$mail = isset($_POST['email']) ? strip_tags(stripslashes($_POST['email'])) : '';
$phone = isset($_POST['phone']) ? strip_tags(stripslashes($_POST['phone'])) : '';
$movie = isset($_POST['movie']) ? strip_tags(stripslashes($_POST['movie'])) : '';
$msg = isset($_POST['message']) ? strip_tags(stripslashes($_POST['message'])) : '';

$spamUrl = isset($_POST['url']) ? strip_tags(stripslashes($_POST['url'])) : '';

$mailto = 'e.hamel.portfolio@gmail.com';


if( isset($_POST['submit']) ){

    if( empty($name) ){
        $errorName = 'The field "Name" is mandatory';
        $error = true;
    }

    if( empty($mail) ){
        $errorMail = 'The field "Email" is mandatory';
        $error = true;
    }else{
        if( !filter_var($mail, FILTER_VALIDATE_EMAIL) ){
            $errorMail = 'The email address is not valid';
            $error = true;
        }
    }

    if( !empty($phone) ){
        if( !(strlen($phone) < 20 && strlen($phone) > 9 && preg_match('/^\+?[^.\-][0-9\.\- ]+$/', $phone)) ){
            $errorPhone = 'The phone number is not valid';
            $error = true;
        }
    }

    if( empty($msg) ){
        $errorMsg = 'The field "Message" is mandatory';
        $error = true;
    }


    if( !$error ){

        if( empty($spamUrl) ){

            $subjectMail = 'Portfolio :' . $name;
            $headers = 'From: "' . $name . '" <' . $mail . '>' . "\r\n" .
                       'Reply-To: ' . $mail . "\r\n";

            $content = 'De: ' . $name . "\r\n" .
                       'Email: ' . $mail . "\r\n" .
                        'Téléphone: ' . $phone . "\r\n" .
                        'Film: ' . $movie . "\r\n\r\n" .
                        'Message: ' . $msg;

            $sent = mail(utf8_decode($mailto), utf8_decode($subjectMail), utf8_decode($content), utf8_decode($headers) . '\nContent-Type: text/plain; charset=UTF-8\nContent-Transfer-Encoding: 8bit\n');

            $sent ? $success = true : $errorSend = "I'm sorry, an error happened! Please try again later.";

        }else{
            $success = true;
        }
    }
}

?><!DOCTYPE html>
<html lang='en' class='no-js'>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>

        <title>About - Elisabeth Hamel &bull; Front-End Developper</title>

        <meta name='description' content='Learn more about me, my background and skills.'>

        <link rel='apple-touch-icon' sizes='180x180' href='/apple-touch-icon.png'>
        <link rel='icon' type='image/png' href='/favicon-32x32.png' sizes='32x32'>
        <link rel='icon' type='image/png' href='/favicon-16x16.png' sizes='16x16'>
        <link rel='manifest' href='/manifest.json'>
        <link rel='mask-icon' href='/safari-pinned-tab.svg' color='#00c7bf'>
        <meta name='theme-color' content='#ffffff'>

        <meta name='author' content='Elisabeth Hamel'>

        <meta property='og:title' content='Elisabeth Hamel &bull; Portfolio'>
        <meta property='og:type' content='website'>
        <meta property='og:url' content='http://www.e-hamel.com'>
        <meta property='og:image' content='http://www.e-hamel.com/img/logo.svg'>

        <link rel='stylesheet' href='css/main.css'>

        <script>document.getElementsByTagName('html')[0].className = 'js';</script>
    </head>

    <body>
        <header role='banner' id='header' class='header'>
            <nav role='navigation'>
                <!--<a href='./' class='logo'>Elisabeth <span>Hamel</span></a>-->
                <div class='logo-wrapper'>
                    <a href='./' class='logo' id='logo' title='Back to home'>
                        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 109.5 98.2'><path fill='#3CB8B7' d='M.6 51.2c1.5-4.8 4.4-8.6 8.8-11.1 1.6-.9 3.9-.5 5.2.9 1.4 1.6.6 3-.3 4.4-.3.5-.8 1-1.3 1.4-5.2 5.3-4.8 12.3 1.2 16.8 3.3 2.4 7 3.2 10.9 1.4 3.8-1.8 6.5-4.4 6.8-8.9.3-3.7-.4-7.1-2.1-10.4C28.3 42.9 27 40 26 37c-4-13-.2-24.7 11-31.6C48.6-1.8 60.7-1.7 72.4 5c9.3 5.3 14 13.6 13.5 24.5-.3 6.7-3.1 12.6-7 18.1-.8 1.2-1.4 2.4-1.7 3.8-2.1 8.7 4.4 16.1 12.9 14.5 4.5-.8 7.4-3.6 8.9-7.9 1.4-4.1.2-7.7-2.9-10.7-.8-.8-1.5-1.7-2-2.7-.8-1.9-.3-3.3 1.5-4.2 1.5-.7 2.9-.7 4.4.2 4.1 2.4 6.5 6.1 8.4 10.2 3 8.3-1.5 15.3-2.6 17.1-5.2 8.6-15.1 11.4-23.7 10.5-.8-.1-1.6-.2-2.7 0 .9 1.1 1.6 2.1 2.4 2.9 3.7 3.8 7.5 7.4 13.1 7.7 1.7.1 3.4-.2 5-.1 2.9.1 4.2 2.7 2.8 5.2-1.1 2-2.8 3.2-4.9 3.6-4 .9-8.1.9-12-.6-9.5-3.6-17.3-9.6-23.6-17.5-1.8-2.3-4-3.9-7-4.4-4.2-.6-6.6 2.1-9 4.9-7.6 8.9-16.4 16-28.3 17.8-4.2.7-8.5.1-11.4-3.8-.9-1.2-1.2-2.5-.4-3.9.8-1.3 2-1.8 3.5-1.9 1.7-.1 3.3.7 5 .4 6.7-1.2 11-5.7 15.3-11.1-4 .7-7.5.7-11 .1C11.3 76.3 5.5 72.5 2 65.5c-.8-1.8-3-6.7-1.4-14.3z' class='body'/><linearGradient id='a' x1='12.713' x2='6.167' y1='59.499' y2='50.291' gradientUnits='userSpaceOnUse' gradientTransform='matrix(1 0 0 -1 0 100)'><stop offset='0' stop-color='#204656'/><stop offset='1' stop-color='#3CB8B7'/></linearGradient><path fill='url(#a)' d='M1.3 49.3s2.1-6.1 8.5-9.4c0 0 3.5-1.4 5.4 2 0 0 .8 1.3-1.2 3.9 0 0-4 3.6-4.4 7.2' class='g-path'/><linearGradient id='b' x1='95.667' x2='101.623' y1='59.168' y2='52.038' gradientUnits='userSpaceOnUse' gradientTransform='matrix(1 0 0 -1 0 100)'><stop offset='0' stop-color='#204656'/><stop offset='1' stop-color='#3CB8B7'/></linearGradient><path fill='url(#b)' d='M99.1 51.9s-.4-2.2-3.6-5.2c0 0-2.3-2.5-1.7-4.5 0 0 .8-2.5 4.4-2.3 0 0 3.8.4 8.2 7.1' class='g-path'/><linearGradient id='c' x1='9.688' x2='19.76' y1='6.267' y2='8.339' gradientUnits='userSpaceOnUse' gradientTransform='matrix(1 0 0 -1 0 100)'><stop offset='0' stop-color='#204656'/><stop offset='1' stop-color='#3CB8B7'/></linearGradient><path fill='url(#c)' d='M25 96.1s-14.7 6.4-19.1-3.2c0 0-1-3.6 3.1-4.5 0 0 .7-.4 5.1.5 0 0 4.5-.5 9.2-4' class='g-path'/><linearGradient id='d' x1='101.175' x2='87.304' y1='5.225' y2='8.111' gradientUnits='userSpaceOnUse' gradientTransform='matrix(1 0 0 -1 0 100)'><stop offset='.002' stop-color='#DC2924'/><stop offset='.182' stop-color='#CA6143'/><stop offset='.4' stop-color='#AF8C6B'/><stop offset='.599' stop-color='#8FA48C'/><stop offset='.771' stop-color='#6CB0A4'/><stop offset='.911' stop-color='#4DB6B2'/><stop offset='1' stop-color='#3CB8B7'/></linearGradient><path fill='url(#d)' d='M89.4 87.5s2.6 1.2 4.7 1.4c0 0 1.7.3 4.9-.1 0 0 3.6-.3 4.3 2.3 0 0 1.1 4-4.4 6.2 0 0-6.7 2.5-13.5-.4-6.7-2.9-7.7-4-8.4-4.2' class='g-path'/><path d='M45.8 35.7c-3 0-5.5 2.5-5.5 5.5s2.4 5.5 5.3 5.5c3.1 0 5.6-2.4 5.7-5.4 0-3-2.5-5.6-5.5-5.6z' class='eye e1'/><path d='M64.6 38.7c-2 0-4.4 2.5-4.4 4.5 0 2.2 2.2 4.4 4.5 4.3 2.3 0 4.4-2.2 4.3-4.4-.1-2.2-2.3-4.4-4.4-4.4z' class='eye e2'/></svg>
                    </a>
                </div>
                <ul>
                    <li>
                        <a href='about.html' title='About Elisabeth Hamel'>
                            <span class='scramble' data-text='About'>About</span>
                        </a>
                    </li>
                    <li>
                        <a href='contact.php' title='Contact informations' class='active'>
                            <span class='scramble' data-text='Contact'>Contact</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>

        <main role='main' class='main'>
            <div class='container'>
                <h1 class='anim-elt'>Contact</h1>
                <p class='small anim-elt' id='form'>You want to work with me, you have a question, you just want to say "Hi" ? Don't hesitate to drop me a message by filling this form!</p>

                <?php if( $success ){ ?>

                    <p class='anim-elt text-success'>
                        Thanks, your message was successfully send!<br>
                        I'll get back to you soon :)
                    </p>

                <?php }else{

                    if( $errorSend ){
                        echo '<p class="text-error anim-elt">' . $errorSend . '</p>';
                    }else if( $error ){ ?>
                        <p class='text-error anim-elt'>The form contains some errors. Please check the highlighted fields:</p>
                    <?php } ?>

                    <form action='#form' method='POST' id='contactForm' <?php if( $error ) echo 'class="form-error"'; ?>>
                        <div class='field anim-elt <?php if( $errorName ) echo "error"; ?>'>
                            <input type='text' name='name' id='name' placeholder='Peter Griffin' value='<?php if( !$success ) echo $name; ?>' required>
                            <label for='name' class='subtitle'>Your name<sup>*</sup></label>
                            <?php if( $errorName ) echo '<span>' . $errorName . '</span>'; ?>
                        </div>
                        <div class='field anim-elt <?php if( $errorMail ) echo "error"; ?>'>
                            <input type='email' name='email' id='email' placeholder='ekiekiekipateng@knights.ni' value='<?php if( !$success ) echo $mail; ?>' required>
                            <label for='email' class='subtitle'>Your email<sup>*</sup></label>
                            <?php if( $errorMail ) echo '<span>' . $errorMail . '</span>'; ?>
                        </div>
                        <div class='field anim-elt <?php if( $errorPhone ) echo "error"; ?>'>
                            <input type='tel' name='phone' id='phone' placeholder='06 06 66 66 66' value='<?php if( !$success ) echo $phone; ?>'>
                            <label for='phone' class='subtitle'>Your phone number <span>(optionnal)</span></label>
                            <?php if( $errorPhone ) echo '<span>' . $errorPhone . '</span>'; ?>
                        </div>
                        <div class='field anim-elt'>
                            <input type='text' name='movie' id='movie' placeholder='Mars Attack' value='<?php if( !$success ) echo $movie; ?>'>
                            <label for='movie' class='subtitle'>Your favourite movie <span>(optionnal)</span></label>
                        </div>
                        <div class='field anim-elt <?php if( $errorMsg ) echo "error"; ?>'>
                            <textarea name='message' id='message' placeholder="What is the answer to the ultimate question, of life, the universe, and everything?" required><?php if( !$success ) echo $msg; ?></textarea>
                            <label for='message' class='subtitle'>Your message<sup>*</sup></label>
                            <?php if($errorMsg) echo '<span>' . $errorMsg . '</span>'; ?>
                        </div>
                        <div class='hidden'>
                            <input type='url' name='url' id='url' value='<?php echo $spamUrl; ?>'>
                            <label for='url'>Please leave this field empty</label>
                        </div>
                        <button type='submit' for='contactForm' class='btn anim-elt' name='submit'>Send</button>
                    </form>

                <?php } ?>

                <p class='tiny anim-elt'>Believe it or not, I kind of enjoy styling forms! But if you don't feel comfortable using it, you can reach me on <a href='mailto:elisabethhamel@outlook.com' title='Send me a message'>elisabethhamel@outlook.com</a>.</p>
            </div>
        </main>

        <footer role='contentinfo' class='footer'>
            <span>&copy;2018 Elisabeth Hamel</span>
            <!--<a href='#'>Legal notice</a>-->

            <ul class='social'>
                <li><a href='https://github.com/ElisabethStereosuper' target='_blank'><svg class='icon'><use xlink:href='#icon-github'/></svg>GitHub</a></li>
                <li><a href='https://codepen.io/elisabeth_hamel/' target='_blank'><svg class='icon'><use xlink:href='#icon-codepen'/></svg>Codepen</a></li>
                <li><a href='https://twitter.com/Elisabeth_Hamel' target='_blank'><svg class='icon'><use xlink:href='#icon-twitter'/></svg>Twitter</a></li>
                <li><a href='https://www.linkedin.com/in/elisabeth-hamel-7757b85a' target='_blank'><svg class='icon'><use xlink:href='#icon-linkedin'/></svg>LinkedIn</a></li>
            </ul>
        </footer>

        <div class='grid-plus' id='gridPlus'>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>

        <svg style='position:absolute;width:0;height:0;overflow:hidden' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
            <defs>
                <!--<symbol id='icon-about' viewBox='0 0 32 32'>
                    <title>About</title>
                    <path d='M23.040 14.88c-0.832 0-1.504 0.672-1.504 1.504s0.672 1.504 1.504 1.504c0.832 0 1.504-0.672 1.504-1.504s-0.672-1.504-1.504-1.504z'/>
                    <path d='M15.968 30.688l-0.704-0.64c-0.064-0.064-6.88-6.336-11.36-10.592-0.064-0.064-0.16-0.16-0.224-0.224-0.032-0.032-0.064-0.064-0.096-0.096l-0.064-0.064-1.248-1.504c-2.016-2.912-2.752-6.528-1.952-9.696 0.672-2.528 2.24-4.48 4.448-5.536 5.088-2.4 9.28 0 11.2 1.728 0.672-0.608 1.696-1.344 2.976-1.92 2.688-1.152 5.536-1.088 8.256 0.192v0c2.208 1.056 3.776 3.008 4.448 5.504 0.832 3.136 0.128 6.752-1.92 9.664l-0.064 0.064-1.248 1.504c-0.032 0.032-0.064 0.064-0.096 0.128-0.096 0.096-0.16 0.192-0.256 0.256-4.384 4.192-11.328 10.528-11.392 10.592l-0.704 0.64zM5.12 17.728c0.032 0.032 0.064 0.096 0.128 0.128 0.032 0.032 0.064 0.064 0.096 0.128 3.616 3.456 8.768 8.224 10.624 9.92 1.888-1.728 7.136-6.528 10.688-9.92 0.064-0.064 0.096-0.096 0.16-0.16 0.032-0.032 0.096-0.096 0.128-0.128l1.152-1.376c1.664-2.4 2.272-5.376 1.6-7.936-0.512-1.92-1.696-3.392-3.328-4.16v0c-5.536-2.624-10.368 3.072-10.368 3.072s-4.736-5.728-10.336-3.104c-1.664 0.768-2.848 2.272-3.328 4.192-0.672 2.592-0.064 5.536 1.632 7.968l1.152 1.376z'/>
                    <path d='M3.68 17.312h3.744c0.32 0 0.64-0.16 0.832-0.448l0.288-0.448 0.832 4.064c0.096 0.448 0.48 0.704 0.96 0.704 0 0 0 0 0 0 0.48 0 0.864-0.288 0.96-0.736l0.992-5.376 0.896 5.088c0.064 0.416 0.416 0.736 0.864 0.8s0.864-0.224 0.992-0.608l1.152-3.008h5.984c0.544 0 0.96-0.416 0.96-0.96s-0.448-0.96-0.96-0.96h-6.624c-0.416 0-0.768 0.256-0.896 0.64l-0.128 0.352-1.216-6.944c-0.096-0.448-0.48-0.736-0.96-0.736 0 0 0 0 0 0-0.48 0-0.864 0.288-0.96 0.736l-1.088 5.824-0.32-1.536c-0.064-0.384-0.384-0.672-0.768-0.736s-0.8 0.096-0.992 0.416l-1.28 1.984h-3.2c-0.544 0-0.96 0.416-0.96 0.96-0.096 0.512 0.352 0.928 0.896 0.928z'/>
                </symbol>
                <symbol id='icon-contact' viewBox='0 0 32 32'>
                    <title>Contact</title>
                    <path d='M12.736 7.104c-0.512 0-0.928 0.416-0.928 0.928s0.416 0.928 0.928 0.928c0.512 0 0.928-0.416 0.928-0.928-0.032-0.512-0.448-0.928-0.928-0.928z'/>
                    <path d='M16.032 7.104c-0.512 0-0.928 0.416-0.928 0.928s0.416 0.928 0.928 0.928c0.512 0 0.928-0.416 0.928-0.928s-0.416-0.928-0.928-0.928z'/>
                    <path d='M19.36 7.104c-0.512 0-0.928 0.416-0.928 0.928s0.416 0.928 0.928 0.928c0.512 0 0.928-0.416 0.928-0.928-0.032-0.512-0.416-0.928-0.928-0.928z'/>
                    <path d='M11.232 10.816h9.6v1.728h-9.6v-1.728z'/>
                    <path d='M11.232 14.016h9.6v1.728h-9.6v-1.728z'/>
                    <path d='M25.984 7.328v-4.832h-6.56l-1.728-1.248-1.664-1.248-2.432 1.824-0.928 0.672h-6.592v0.96c0 0.032 0 0.032 0 0.064v3.776l-5.536 4.48v20.224h30.944v-20.256l-5.504-4.416zM25.984 9.728l2.816 2.048-2.816 2.048v-4.096zM16.032 2.144l0.48 0.352h-0.96l0.48-0.352zM8.032 4.512h15.968v10.784l-8 5.824-7.968-5.824v-10.784zM17.888 22.144v0 0 0zM6.080 9.664v4.224l-2.912-2.112 2.912-2.112zM2.464 13.632l10.016 7.296-10.016 8.064v-15.36zM4.288 30.048l9.824-7.904 1.888 1.376 1.888-1.376 9.888 7.904h-23.488zM29.536 28.96l-10.016-8.032 10.016-7.328v15.36z'/>
                </symbol>
                <symbol id='icon-portfolio' viewBox='0 0 32 32'>
                    <title>Portfolio</title>
                    <path d='M0 2.464v23.136h32v-23.136h-32zM2.112 4.576h27.808v17.376h-27.808v-17.376zM3.232 24.576c-0.352 0-0.64-0.224-0.736-0.512-0.032-0.096-0.064-0.16-0.064-0.256s0.032-0.192 0.064-0.256c0.096-0.32 0.384-0.512 0.736-0.512s0.64 0.224 0.736 0.512c0.032 0.096 0.064 0.16 0.064 0.256s-0.032 0.192-0.064 0.256c-0.096 0.288-0.384 0.512-0.736 0.512z'/>
                    <path d='M7.36 27.968h18.016v1.92h-18.016v-1.92z'/>
                    <path d='M10.752 26.112h11.2v1.312h-11.2v-1.312z'/>
                    <path d='M11.968 13.12l3.296-1.44c0.064-0.032 0.128-0.096 0.16-0.16s0-0.16-0.032-0.224c-0.704-1.12-1.92-1.856-3.328-1.856-2.176 0-3.936 1.76-3.936 3.936s1.76 3.936 3.936 3.936c1.408 0 2.656-0.736 3.328-1.856 0.032-0.064 0.064-0.16 0.032-0.224s-0.064-0.128-0.16-0.16l-3.296-1.44c-0.096-0.032-0.16-0.128-0.16-0.256-0.032-0.128 0.032-0.224 0.16-0.256z'/>
                    <path d='M17.248 12.544c-0.448 0-0.8 0.352-0.8 0.8s0.352 0.8 0.8 0.8c0.448 0 0.8-0.352 0.8-0.8s-0.352-0.8-0.8-0.8z'/>
                    <path d='M20.192 12.544c-0.448 0-0.8 0.352-0.8 0.8s0.352 0.8 0.8 0.8c0.448 0 0.8-0.352 0.8-0.8 0.032-0.448-0.352-0.8-0.8-0.8z'/>
                    <path d='M23.168 12.544c-0.448 0-0.8 0.352-0.8 0.8s0.352 0.8 0.8 0.8c0.448 0 0.8-0.352 0.8-0.8s-0.352-0.8-0.8-0.8z'/>
                </symbol>-->
                <symbol id='icon-codepen' viewBox='0 0 32 32'>
                    <title>Codepen</title>
                    <path d='M17.057 0.419c-0.863-0.571-1.989-0.558-2.839 0.034l-12.717 8.858c-0.678 0.473-1.082 1.246-1.082 2.074v9.544c0 0.849 0.425 1.64 1.134 2.108l12.925 8.544c0.845 0.559 1.942 0.559 2.787 0l13.182-8.709c0.707-0.468 1.134-1.259 1.134-2.108v-9.377c0-0.848-0.425-1.639-1.133-2.107l-13.391-8.861zM26.903 10.758l-4.872 3.271-4.569-3.323-0.029-6.535 9.47 6.587zM14.127 4.177v6.396l-4.682 3.274-4.67-3.132 9.352-6.538zM3.495 13.867l3.023 2.025-3.023 2.115v-4.14zM14.207 27.503l-9.43-6.324 4.71-3.292 4.719 3.166v6.451zM12.416 15.84l3.053-2.135 3.556 2.337-3.152 2.117-3.457-2.319zM17.538 27.503v-6.453l4.51-3.023 4.856 3.192-9.366 6.283zM28.25 18.117l-3.202-2.104 3.202-2.147v4.251z'/>
                </symbol>
                <symbol id='icon-github' viewBox='0 0 32 32'>
                    <title>GitHub</title>
                    <path d='M28.583 13.418c0.119-0.751 0.193-1.575 0.211-2.499-0.007-3.961-1.903-5.363-2.268-6.020 0.537-3.001-0.089-4.367-0.38-4.834-1.074-0.381-3.738 0.984-5.194 1.946-2.373-0.695-7.388-0.627-9.268 0.18-3.47-2.485-5.305-2.106-5.305-2.106s-1.186 2.127-0.314 5.24c-1.142 1.455-1.993 2.483-1.993 5.212 0 0.653 0.041 1.271 0.109 1.865 0.983 5.169 5.079 7.4 9.103 7.784-0.605 0.46-1.332 1.331-1.433 2.34-0.761 0.492-2.291 0.654-3.481 0.28-1.667-0.527-2.306-3.829-4.803-3.358-0.54 0.101-0.433 0.457 0.035 0.761 0.761 0.493 1.477 1.107 2.029 2.419 0.424 1.008 1.316 2.807 4.137 2.807 1.12 0 1.904-0.132 1.904-0.132s0.021 2.568 0.021 3.569c0 1.153-1.555 1.476-1.555 2.029 0 0.22 0.515 0.241 0.929 0.241 0.818 0 2.519-0.681 2.519-1.879 0-0.952 0.015-4.151 0.015-4.711 0-1.224 0.656-1.614 0.656-1.614s0.080 6.534-0.158 7.41c-0.279 1.030-0.785 0.884-0.785 1.342 0 0.684 2.045 0.167 2.724-1.33 0.525-1.17 0.29-7.577 0.29-7.577l0.547-0.012c0 0 0.006 2.935-0.013 4.275-0.020 1.389-0.163 3.144 0.662 3.973 0.541 0.545 2.2 1.501 2.2 0.627 0-0.506-1.161-0.925-1.161-2.297v-6.32c0.706 0 0.851 2.077 0.851 2.077l0.254 3.86c0 0-0.169 1.408 1.521 1.996 0.597 0.209 1.873 0.266 1.933-0.085s-1.537-0.872-1.552-1.962c-0.008-0.664 0.030-1.052 0.030-3.94 0-2.886-0.388-3.954-1.739-4.805 3.918-0.402 7.988-2.152 8.721-6.753z'/>
                </symbol>
                <symbol id='icon-linkedin' viewBox='0 0 32 32'>
                <title>LinkedIn</title>
                    <path d='M4.298 0.262h-0.004c-1.141 0-2.218 0.444-3.030 1.249-0.815 0.808-1.264 1.879-1.264 3.017-0.001 1.163 0.458 2.253 1.289 3.068 0.806 0.789 1.905 1.233 2.971 1.207 0.031 0.001 0.062 0.001 0.093 0.001 1.068 0 2.126-0.435 2.914-1.203 0.83-0.809 1.289-1.895 1.292-3.058 0.003-1.137-0.442-2.21-1.251-3.022-0.809-0.811-1.877-1.258-3.010-1.259z'/>
                    <path d='M6.4 9.871h-4.312c-0.857 0-1.555 0.719-1.555 1.603v18.663c0 0.865 0.733 1.596 1.6 1.596h4.267c0.867 0 1.6-0.716 1.6-1.563v-18.699c0-0.867-0.733-1.6-1.6-1.6z'/>
                    <path d='M24.603 9.338h-1.124c-2.071 0-4.058 0.882-5.346 2.339v-0.739c0-0.529-0.539-1.067-1.067-1.067h-5.333c-0.493 0-1.067 0.437-1.067 1.001v19.9c0 0.566 0.562 0.961 1.067 0.961l5.867 0.002c0.505 0 1.067-0.395 1.067-0.961v-11.497c0-1.734 1.286-3.108 2.927-3.126 0.835-0.019 1.623 0.31 2.214 0.902 0.488 0.488 0.725 1.2 0.725 2.179v11.44c0 0.529 0.539 1.067 1.067 1.067h5.333c0.528 0 1.067-0.538 1.067-1.067v-13.765c0-4.244-3.25-7.568-7.397-7.568z'/>
                </symbol>
                <symbol id='icon-twitter' viewBox='0 0 32 32'>
                    <title>Twitter</title>
                    <path d='M31.275 5.924c-0.503 0.223-1.020 0.411-1.548 0.564 0.625-0.707 1.102-1.539 1.393-2.45 0.065-0.204-0.002-0.427-0.17-0.561s-0.4-0.15-0.585-0.040c-1.122 0.665-2.332 1.143-3.6 1.423-1.278-1.249-3.014-1.96-4.808-1.96-3.788 0-6.87 3.082-6.87 6.869 0 0.298 0.019 0.595 0.056 0.888-4.7-0.413-9.070-2.723-12.071-6.404-0.107-0.131-0.272-0.202-0.44-0.188s-0.32 0.108-0.406 0.255c-0.609 1.044-0.93 2.239-0.93 3.454 0 1.655 0.591 3.226 1.635 4.453-0.317-0.11-0.625-0.247-0.919-0.411-0.158-0.088-0.35-0.086-0.507 0.003s-0.255 0.255-0.259 0.436c-0.001 0.030-0.001 0.061-0.001 0.092 0 2.471 1.33 4.695 3.363 5.908-0.175-0.017-0.349-0.043-0.523-0.076-0.179-0.034-0.363 0.029-0.483 0.165s-0.161 0.326-0.105 0.5c0.753 2.349 2.69 4.078 5.032 4.604-1.943 1.217-4.164 1.854-6.496 1.854-0.487 0-0.976-0.029-1.455-0.085-0.238-0.028-0.465 0.112-0.546 0.338s0.005 0.479 0.207 0.609c2.996 1.921 6.46 2.936 10.018 2.936 6.994 0 11.369-3.298 13.808-6.065 3.041-3.45 4.785-8.016 4.785-12.528 0-0.188-0.003-0.379-0.009-0.569 1.2-0.904 2.233-1.998 3.073-3.255 0.128-0.191 0.114-0.443-0.034-0.619s-0.394-0.233-0.604-0.14z'/>
                </symbol>
            </defs>
        </svg>

        <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyB1uPQvRPQP9tOgEnK1HOB5JqGza8i7DiQ' defer></script>
        <script src='js/main.js' defer></script>
    </body>
</html>