		<?php $page='home';include('content/header.php'); ?>

		<div class='accueil'>
			<div class='wrapper presentation'>
				<p class='maj'>Je suis <strong>développeuse front-end</strong> &amp; <strong>WordPress</strong>, et plus généralement passionnée <br/> par le <strong>web</strong> et les <strong>langages</strong> qui l’habillent et l’animent. </p>
				<p>Dans ce cadre, ce site web présente mes divers <a href='projets.php'>projets</a>. <br/> Vous pourrez également y trouver mes <a href='apropos.php'>compétences</a>. N’hésitez pas à <a href='contact.php'>me contacter</a>!</p>
			</div>

			<section class='blanc'>
				<div class='wrapper'>
					<h2>Ce que je peux faire pour vous</h2>
					<ul>
						<li id='inte'>
							<h3>Intégration</h3>
							<p>J’intègre des maquettes graphiques en <strong>HTML5 / CSS3</strong>, et les anime avec <strong>JavaScript / jQuery</strong>.</p>
							<p class='txtPlus'>La <strong>sémantique</strong> est une de mes principales préoccupations, les pages que j‘intègre sont donc valides <strong>W3C</strong>.
							<br/>Les sites web doivent être visibles partout et par tous, c’est pourquoi je fais très attention à la <strong>compatibilité</strong> et <strong>l'accessibilité</strong>.</p>
							<a href='#' role="button" class='plus'>Lire plus</a>
						</li>
						<li id='dev'>
							<h3>Développement</h3>
							<p>Je développe des sites au complet, à l’aide d’un <strong>CMS</strong> ou non. J’ai pour cela de bonnes compétences en <strong>PHP5 / MySQL</strong>.</p>
							<p class='txtPlus'>Je suis spécialisée dans <strong>WordPress</strong>, mais connais d’autres CMS. L’utilisation  de ces outils est idéale pour un <strong>site éditable</strong>, mais est à adapter selon les besoins!
							<br/>Je gère également la sécurité, <strong>les performances</strong> et le <strong>référencement</strong> naturel d’un site web.</p>
							<a href='#' role="button" class='plus'>Lire plus</a>
						</li>
						<li id='design'>
							<h3>UI/UX / Web design</h3>
							<p>J’étudie quel est le meilleur scénario pour la <strong>navigation</strong> et le cheminement de l’utilisateur.</p>
							<p>Je conçois pour cela <strong>benchmarks</strong>, <strong>arborescences</strong>, <strong>wireframes</strong>.</p>
							<p class='txtPlus'>Bien que cela ne soit pas ma spécialité, je peux également produire des <strong>maquettes</strong> sous <strong>Photoshop</strong>.</p>
							<a href='#' role="button" class='plus'>Lire plus</a>
						</li>
					</ul>
					<nav>
						<a class='voir' href='apropos.php'>Voir mes compétences</a>
						<a class='telecharger' href='cv.pdf' role="button" title='Télécharger mon CV au format PDF'>Télécharger mon CV</a>
					</nav>
				</div>
			</section>

			<section class='wrapper'>
				<h2>Dernières réalisations</h2>
				<ul class='creas'>
					<li class='first'>
						<a href='projets.php?c=0'>
							<div class='filtre'>En savoir plus<span>+</span></div>
							<img src='img/uxd/vignette.jpg' alt='UXD Meetup' width='300' height='154'/>
							<h3>UXDmeetup</h3>
						</a>
						<p>Design/Intégration/Développement<br/><a href='http://intuiti.net' target='_blank'>Agence Intuiti</a></p>
					</li>
					<li>
						<a href='projets.php?c=1'>
							<div class='filtre'>En savoir plus<span>+</span></div>
							<img src='img/rezo/vignette.jpg' alt='REZOrue' width='300' height='154'/>
							<h3>REZOrue</h3>
						</a>
						<p>Intégration/Dév. (WordPress)</p>
					</li>
					<li>
						<a href='projets.php?c=2'>
							<div class='filtre'>En savoir plus<span>+</span></div>
							<img src='img/malouma/vignette.jpg' alt='Malouma' width='300' height='154'/>
							<h3>Malouma</h3>
						</a>
						<p>Intégration/Développement</p>
					</li>
				</ul>
				<a class='voir' href='projets.php' title='Voir tous les projets'>Voir tout</a>
			</section>

		</div>

		<?php include('content/footer.php'); ?>

	</body>

</html>