<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<title>Elisabeth Hamel / Portfolio - Contact</title>
		
		<meta name="description" content="Contacter ou rejoindre Elisabeth Hamel sur les réseaux sociaux.">
		<meta name="keywords" content="php, formulaire, contact, réseaux sociaux, linkedin, twitter, viadeo" />
		<meta name="author" content="Elisabeth Hamel">
		<meta property="og:title" content="Elisabeth Hamel / Portfolio" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://elisabeth-hamel.fr" />

		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<link type="text/css" rel="stylesheet" href="style.css" />
		<link rel="shortcut icon" href="icones/favicon.png" />

		<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
		<script src="plugins/vallenato/vallenato-contact.js" type="text/javascript"></script>
		<link type="text/css" rel="stylesheet" href="plugins/vallenato/accordion-contact.css" />

		<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-37415171-1']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
	</head>

	<?php 

		if ( !empty($_POST) && !empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['message']) ){ ?>
			<script>$('form').append("<img src='img/load.gif' alt='Envoi du message'/>");</script>
		<?php
	        $nom = strip_tags(urldecode($_POST['nom'])); 
	        $email = strip_tags(urldecode($_POST['email']));
	        $message = strip_tags(urldecode($_POST['message']));

	        $sujet = 'Elisabeth Hamel / Portfolio : '.$nom;
	        $monEmail = 'elisabethhamel@outlook.com';

	        $headers = 'From: '.$nom.' <'.$email.'>';
	        $message .= $headers;

	        if (mail($monEmail, $sujet, $message, $headers)){ 
				echo '<div class="pop"><p>Votre message a bien été envoyé! :)</p></div>'; 
			} else {
		 		echo "<div class='pop'><p>Une erreur est survenue lors de l'envoi du message :(</p></div>";
			} ?>
			<script>$('.pop').delay('1500').fadeOut();</script>
		<?php	
	    }

?>

	<body id="contact">
		<header>
				<div class="content-header">
					<a href="index.html"><div id="logo">
						<span>E. HAMEL</span>
						<p><span class="int1">INTEGRATEUR</span><BR><span class="int2">MULTIMEDIA</span></p>
					</div></a>
					<nav id="menu">
						<ul>
							<li id="liaccueil2"><a href="index.html"><div class="menu-icone"></div></a></li>
							<li id="liapropos2"><a href="apropos.html"><div class="menu-icone"></div></a></li>
							<li id="liportfolio2"><a href="portfolio.html"><div class="menu-icone"></div></a></li>
							<li id="licontact2"><a href="#" class="noclic"><div class="menu-icone"></div></a><p>CONTACT</p></li>
							<li id="lien2"><a href="contact-en.php"><div class="menu-icone"></div></a></li>
						</ul>
					</nav>
				</div>
		</header>
		<div class="content">
			<h2>CONTACT</h2>
			<div id="contentform">
				<p>
					Un projet, des questions, des suggestions... <BR>
					N’hésitez pas à me contacter par mail, auquel je répondrai dés que possible.
				</p>
	                <form method="post" action="">
	                    <input placeholder="Nom" name="nom" type="text" required>
	                    <input placeholder="Email" name="email" type="email" required>
	                    <textarea placeholder="Message" name="message" required></textarea>
	                    <input value="Envoyer" id="submit" name="submit" type="submit">
	                </form>
			</div>
			<div class="reseaux">
				<div id="accordion-container"> 
					<h3 class="accordion-header">RESEAUX SOCIAUX</h3>
					<div class="accordion-content"> 
						<ul>
							<li><a target="_blank" href="http://www.linkedin.com/profile/view?id=211003721&trk=tab_pro"><img alt="LinkedIn" src="icones/in.png" height="50"/><span>LinkedIn</span></a></li>
							<li><a target="_blank" href="https://twitter.com/Elisabeth_Hamel"><img alt="Twitter" src="icones/twit.png" height="45"/><span id="twit">Twitter</span></a></li>
							<li><a target="_blank" href="http://fr.viadeo.com/fr/profile/elisabeth.hamel3"><img alt="Viadeo" src="icones/viadeo.png" height="50"/><span>Viadeo</span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<footer id="footcontact">
				<p class="right2">ELISABETH HAMEL | Tous droits réservés, 2013</p>
		</footer>
	</body>

</html>