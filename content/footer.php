			<footer>
				<ul>
					<li><a href='https://www.linkedin.com/profile/view?id=211003721' title='LinkedIn' target='_blank'>LinkedIn</a></li>
					<li><a id='tw' href='https://twitter.com/Elisabeth_Hamel' title='Twitter' target='_blank'>Twitter</a></li>
					<li><a id='vi' href='http://www.viadeo.com/profile/0022dbjl3rirf4gh/' title='Viadeo' target='_blank'>Viadeo</a></li>
				</ul>
				<p><img src='img/logo-footer.png' alt='Elisabeth Hamel logo' width='21' height='19'/>2016, Elisabeth Hamel // Tous droits réservés - <a href='credits.php'>Mentions légales</a></p>
				<noscript>Il semble que votre navigateur ne supporte pas JavaScript, ou que vous avez bloqué son application. L'affichage de ce site sera moins agréable sans cette technologie!</noscript>
			</footer>

			<script type='text/javascript' src='js/jquery-1.11.2.min.js'></script>
			<?php if($page === 'A propos'){ ?>
				<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyAzn1oXenf2qYfc68ZPDilVQhVfftRz258'></script>
			<?php } ?>
			<script type='text/javascript' src='js/scripts.js'></script>

			<?php if($page === 'Contact'){

				if( !empty($_POST) && !empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['message']) ){ ?>
					<?php
				        $nom = strip_tags(urldecode($_POST['nom']));
				        $email = strip_tags(urldecode($_POST['email']));
				        $message = strip_tags(urldecode($_POST['message']));

				        $sujet = 'Elisabeth Hamel / Portfolio : ' . $nom;
				        $monEmail = 'e.hamel.portfolio@gmail.com';

				        $headers = 'From: ' . $nom . ' <' . $email . '>';

				        $pop = mail($monEmail, $sujet, $message, $headers) ? "<div class='pop'><p>Votre message a bien été envoyé! :)</p></div>" : "<div class='pop'><p>Une erreur est survenue lors de l'envoi du message :(</p></div>";
				        echo $pop;
					?>
					<script>$('.page').css('opacity', '0.5').delay('3000').css('opacity', '1'); $('.pop').delay('1500').fadeOut();</script>
				<?php }

			} ?>

			<script>
				(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
				ga('create', 'UA-37415171-1', 'auto');
				ga('send', 'pageview');
			</script>
