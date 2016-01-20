		<?php $page='Contact';include('content/header.php'); ?>
			<div class='wrapper page'>
				<h2>Contactez-moi</h2>

				<aside>
					<p>Un projet, des suggestions, des questions....</p>
 					<p>N’hésitez pas à me contacter, et je vous répondrai dans les plus bref délais!</p>
 					<ul>
 						<li>Nantes, FRANCE</li>
 						<li id='tel'>06.06.41.90.38</li>
 						<li id='mail'>elisabethhamel@outlook.com</li>
 						<li id='lico' class='infos'><a href='https://www.linkedin.com/profile/view?id=211003721' target='_blank'>LinkedIn</a></li>
 						<li id='twco' class='infos'><a href='https://twitter.com/Elisabeth_Hamel' target='_blank'>Twitter</a></li>
						<li id='vico' class='infos'><a href='http://www.viadeo.com/profile/0022dbjl3rirf4gh/' target='_blank'>Viadeo</a></li>
 					</ul>
				</aside>

				<form method='post' action='contact.php'>
					<label for='nom'>Votre nom:</label>
	                <input name='nom' id='nom' type='text' class='input' required>
	                <label for='email'>Votre adresse mail:</label>
	                <input name='email' id='email' type='email' class='input' required>
	                <label for='msg'>Message:</label>
	                <textarea name='message' id='msg' class='input' required></textarea>
	                <input value='Envoyer' id='submit' name='submit' type='submit'>
	            </form>
				
			</div>

		<?php include('content/footer.php'); ?>

	</body>

</html>