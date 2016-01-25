<!DOCTYPE html>
<!--[if lt IE 9]> <html lang='fr-FR' class='no-js lt-ie9 lt-ie10'> <![endif]-->
<!--[if IE 9]> <html lang='fr-FR' class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang='fr-FR' class='no-js'> <!--<![endif]-->

	<head>
		<meta http-equiv='X-UA-Compatible' content='IE=edge'>
		<meta charset='UTF-8'>

		<title><?php if($page !== 'home') echo $page . ' //'; ?> Elisabeth Hamel &bull; Développeuse FrontEnd</title>
		<meta name='viewport' content='width=device-width, initial-scale=1'>

		<?php $class = ''; ?>

		<?php
		switch($page){
			case 'Projets': ?>
				<meta name='description' content="Découvrez mes réalisations, sites web responsive et éditables, applications, créations graphiques.">
		<?php break;
			case 'A propos':
				$class = 'apropos'; ?>
				<meta name='description' content="Je suis passionée de web et de développement Front-End et WordPress. Découvrez mon parcours et mes compétences.">
		<?php break;
			case 'Contact': ?>
				<meta name='description' content="Actuellement à Nantes, contactez-moi si vous avez des questions, suggestions, projets, ou envie de prendre un petit café!">
		<?php break;
			default: ?>
				<meta name='description' content="Elisabeth Hamel Portfolio // Développeuse Front-End et WordPress, découvrez mes projets et mes compétences - HTML5 / CSS3 / JavaScript... ">
		<?php } ?>

		<meta name='keywords' content='développeur web front-end, intégrateur, mobile, responsive, web design, html, css, javascript, jquery, php, Elisabeth, Hamel, freelance'>
		<meta name='author' content='Elisabeth Hamel'>

		<meta property='og:title' content='Elisabeth Hamel &bull; Portfolio'>
		<meta property='og:type' content='website'>
		<meta property='og:url' content='http://elisabeth-hamel.fr/'>
		<meta property='og:image' content='http://elisabeth-hamel.fr/img/logo.png'>

		<link rel='icon' type='image/png' href='img/favicon.png'>
		<link type='text/css' rel='stylesheet' href='css/style.css'>

		<noscript>
			<link type='text/css' rel='stylesheet' href='css/nojs.css'>
		</noscript>

		<script src='js/modernizr.min.js'></script>
	</head>

	<body <?php if($class) echo "class='". $class ."'"; ?>>

		<header <?php if($page !== 'home') echo "class='fixed'";?>>
			<div class='wrapper'>
				<a href='./' title='Accueil' id='logo'>
					<img src='img/logo.png' alt='Elisabeth Hamel Logo' width='81' height='72'>
					<h1>Elisabeth Hamel <span>Développeuse Front-End <span class='orange'>&raquo;</span> WordPress</span></h1>
				</a>
				<nav role='navigation'>
					<ul>
						<li><a <?php if($page === 'home') echo "class='actif'"; ?> href='./'>Accueil</a></li>
						<li><a id='po' <?php if($page === 'Projets') echo "class='actif'"; ?> href='projets.php'>Portfolio</a></li>
						<li><a id='ap' <?php if($page === 'A propos') echo "class='actif'"; ?> href='apropos.php'>A Propos</a></li>
						<li><a id='co' <?php if($page === 'Contact') echo "class='actif'"; ?> href='contact.php'>Contact</a></li>
					</ul>
				</nav>
			</div>
		</header>

