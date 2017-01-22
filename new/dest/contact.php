<?php

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


if(isset($_POST['submit'])){

    if(empty($name)){
        $errorName = 'The field "Name" is mandatory';
        $error = true;
    }
    if(empty($mail)){
        $errorMail = 'The field "Email" is mandatory';
        $error = true;
    }else{
        if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
            $errorMail = 'The email address is not valid';
            $error = true;
        }
    }
    if(!empty($phone)){
        if(!(strlen($phone) < 20 && strlen($phone) > 9 && preg_match("/^\+?[^.\-][0-9\.\- ]+$/", $phone))){
            $errorPhone = 'The phone number is not valid';
            $error = true;
        }
    }
    if(empty($msg)){
        $errorMsg = 'The field "Message" is mandatory';
        $error = true;
    }


    if(!$error){

        if(empty($spamUrl)){
            $subjectMail = 'Portfolio :' . $name;
            $headers = 'From: "' . $name . '" <' . $mail . '>' . "\r\n" .
                       'Reply-To: ' . $mail . "\r\n";

            $content = 'De: ' . $name . "\r\n" .
                       'Email: ' . $mail . "\r\n";
            if(!empty($phone)){
                $content .= 'Téléphone: ' . $phone . "\r\n";
            }
            if(!empty($movie)){
                $content .= 'Film: ' . $movie . "\r\n";
            }
            $content .= "\r\n" . 'Message: ' . $msg;

            $sent = mail($mailto, $subjectMail, $content, $headers);

            if($sent){
                $success = true;
            }else{
                $errorSend = "I'm sorry, an error happened! Please try again later.";
            }
        }else{
            $success = true;
        }
    }
}

?><!DOCTYPE html><html lang="en-EN" class="no-js"><head><meta charset="utf-8"><meta name="description" content="Learn more about me, my background and skills."><meta name="viewport" content="width=device-width,initial-scale=1"><title>Contact - Elisabeth Hamel &bull; Front-End Developper</title><meta name="author" content="Elisabeth Hamel"><meta property="og:title" content="Elisabeth Hamel &bull; Portfolio"><meta property="og:type" content="website"><meta property="og:url" content="http://www.e-hamel.com"><meta property="og:image" content="http://www.e-hamel.com/img/logo.svg"><link rel="stylesheet" href="css/main.css"><script async>document.getElementsByTagName('html')[0].className = 'js';</script></head><body><header role="banner" id="header"><nav role="navigation"><!--<a href='./' class='logo'>Elisabeth <span>Hamel</span></a>--> <a href="./" class="logo on"> <?php include('includes/logo.svg'); ?> </a><ul><li><a href="portfolio.php">Portfolio<svg class="icon"><use xlink:href="#icon-portfolio"/></svg></a></li><li><a href="about.php">About<svg class="icon"><use xlink:href="#icon-about"/></svg></a></li><li><a href="contact.php" class="active">Contact<svg class="icon icon-contact"><use xlink:href="#icon-contact"/></svg></a></li></ul></nav></header><main role="main" id="main"><div class="container"><section><h1 class="anim-elt">Contact</h1> <?php if($success){ ?> <p class="anim-elt">Thanks, your message was successfully send!</p><p class="anim-elt">I'll get back to you soon :)</p> <?php }else{ ?> <p class="anim-elt">You want to work with me, you have a question, you just want to say "Hi" ? Don't hesitate to drop me a message by filling this form.</p> <?php
                            if($errorSend){
                                echo '<p class="text-error anim-elt">' . $errorSend . '</p>';
                            }else if($error){ ?> <p class="text-error anim-elt">The form contains some errors. Please check the highlighted fields:</p> <?php }
                        ?> <form action="#" method="POST" id="contactForm" <?php if($error) echo 'class="form-error"'; ?>><div class="field <?php if($errorName) echo "error"; ?>"><input type="text" name="name" id="name" placeholder="Peter Griffin" class="anim-elt" value="<?php echo $name; ?>" required><label for="name" class="anim-elt">Your name<sup>*</sup></label> <?php if($errorName) echo '<span class="anim-elt">' . $errorName . '</span>'; ?> </div><div class="field <?php if($errorMail) echo "error"; ?>"><input type="email" name="email" id="email" placeholder="ekiekiekipateng@knights.ni" class="anim-elt" value="<?php echo $mail; ?>" required><label for="email" class="anim-elt">Your email<sup>*</sup></label> <?php if($errorMail) echo '<span class="anim-elt">' . $errorMail . '</span>'; ?> </div><div class="field <?php if($errorPhone) echo "error"; ?>"><input type="tel" name="phone" id="phone" placeholder="06 06 66 66 66" class="anim-elt" value="<?php echo $phone; ?>"><label for="phone" class="anim-elt">Your phone number <span>(optionnal)</span></label> <?php if($errorPhone) echo '<span class="anim-elt">' . $errorPhone . '</span>'; ?> </div><div class="field"><input type="text" name="movie" id="movie" placeholder="Mars Attack" class="anim-elt" value="<?php echo $movie; ?>"><label for="movie" class="anim-elt">Your favourite movie <span>(optionnal)</span></label></div><div class="field <?php if($errorMsg) echo "error"; ?>"><textarea name="message" id="message" placeholder="Hello there !" class="anim-elt" required><?php echo $msg; ?></textarea><label for="message" class="anim-elt">Your message<sup>*</sup></label> <?php if($errorMsg) echo '<span class="anim-elt">' . $errorMsg . '</span>'; ?> </div><div class="hidden"><input type="url" name="url" id="url" value="<?php echo $spamUrl; ?>"><label for="url">Please leave this field empty</label></div><button type="submit" for="contactForm" class="btn anim-elt" name="submit">Send</button></form><p class="anim-elt">Believe it or not, I kind of enjoy styling forms! But if you don't feel comfortable using it, you can reach me on <a href="mailto:elisabethhamel@outlook.com" title="Send me a message">elisabethhamel@outlook.com</a>.</p> <?php } ?> </section></div></main> <?php include('includes/footer.html'); ?> <script src="js/main.js" defer="defer"></script></body></html>