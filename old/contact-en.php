 <?php
    if ( !empty($_POST) && !empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['message']) )
     {
        $nom = strip_tags($_POST['nom']); 
        $email = strip_tags($_POST['email']);
        $message = strip_tags($_POST['message']);

        $sujet = 'Elisabeth Hamel / Portfolio : '.$nom;
        $monEmail = 'elisabethhamel@outlook.com';

        $headers = 'From: '.$nom.'<'.$email.'>';

        mail($monEmail, $sujet, $message, $headers);
    }
?> 


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="Contact or join Elisabeth Hamel on social networks">
		<meta name="keywords" content="php, contact, social networks, linkedin, twitter, viadeo" />
		<meta name="author" content="Elisabeth Hamel">
		<meta property="og:title" content="Elisabeth Hamel / Portfolio" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://elisabeth-hamel.fr" />

		<title>Elisabeth Hamel / Portfolio</title>

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

	<body id="contact">
		<header>
				<div class="content-header">
					<a href="index-en.html"><div id="logo">
						<span>E. HAMEL</span>
						<p><span class="int1en">FRONT-END</span><BR><span class="int2en">DEVELOPER</span></p>
					</div></a>
					<nav id="menu">
						<ul>
							<li id="liaccueil2"><a href="index-en.html"><div class="menu-icone"></div></a></li>
							<li id="liapropos2"><a href="apropos-en.html"><div class="menu-icone"></div></a></li>
							<li id="liportfolio2"><a href="portfolio-en.html"><div class="menu-icone"></div></a></li>
							<li id="licontact2"><a href="#" class="noclic"><div class="menu-icone"></div></a><p>CONTACT</p></li>
							<li id="lifr2"><a href="contact.php"><div class="menu-icone"></div></a></li>
						</ul>
					</nav>
				</div>
		</header>
		<div class="content">
			<h2>CONTACT</h2>
			<div id="contentform">
				<p>
					A project, questions, suggestions... <BR>
					Don't hesitate to contact me by e-mail, to which I'll answer as soon as possible.
				</p>
	                <form method="post" action="">
	                    <input placeholder="Name" name="nom" type="text" required>
	                    <input placeholder="Email" name="email" type="email" required>
	                    <textarea placeholder="Message" name="message" required></textarea>
	                    <input value="Envoyer" id="submit" name="submit" type="submit">
	                </form>
			</div>

			<div class="reseaux">
				<div id="accordion-container"> 
					<h3 class="accordion-header">SOCIAL NETWORKS</h3>
					<div class="accordion-content"> 
						<ul>
							<li><a target="_blank" href="http://www.linkedin.com/profile/view?id=211003721&trk=tab_pro"><img alt="LinkedIn" src="icones/in.png" height="50px"/><span>LinkedIn</span></a></li>
							<li><a target="_blank" href="https://twitter.com/Elisabeth_Hamel"><img alt="Twitter" src="icones/twit.png" height="45px"/><span id="twit">Twitter</span></a></li>
							<li><a target="_blank" href="http://fr.viadeo.com/fr/profile/elisabeth.hamel3"><img alt="Viadeo" src="icones/viadeo.png" height="50px"/><span>Viadeo</span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<footer id="footcontact">
				<p class="right2">ELISABETH HAMEL | All rights reserved, 2013</p>
		</footer>
	</body>

</html>