<!DOCTYPE html>
<html>
	<head>
		<title>SRC'est Toi</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="interface.css"/>
	</head>

<body>
	<img src="explication2.png" id="explication">
	
	<div id="wrap">
		<header><img src="ban.png" id="ban"></header>

		<form id="formulaire" method="post" action="traitement2.php" enctype="multipart/form-data">
			<img id="choisir_photo" src="photo.png"><br/>
			<input type="file" name="photo" id="photo"/><br/>
			<input type="submit" name="submit" value="" style="display:block">
		</form>


		<div id="profil">
		<img id="choisir_profil" src="profil.png"><br/>
		<input type="radio" name="profil" value="blue"> <img src="dev.png" id="blue"> <br/>
	    <input type="radio" name="profil" value="yellow"><img src="graphiste.png" id="yellow"><br/>
	    <input type="radio" name="profil" value="red"><img src="com.png" id="red"><br/>
	    <input type="submit" value="" id="btn_choix" style="display:block">
        </div>
		
	    <div id="btn"></div>

<div id="carte">
<img src="cv.png" id="cv">
<a href="http://www.elisabeth-hamel.fr/id/carte_de_visite.ai"><img src="photo_cv.png" id=""></a> 
</div>

	<canvas id="canvas" width="500" height="500"></canvas>
		<img src="<?php echo $_GET['myFile']; ?>" id="img" style="display:none" width="700"/>
		<canvas id="src1" width="500" height="500" style="display:none"></canvas>
        


</div>
	

<script>
	
	function afficherExplications(ev){//souris sur la div
		document.getElementById("wrap").style.opacity=0.5;
		document.getElementById("explication").style.opacity=1;

	}
	
	function cacherExplications(ev){//souris sort de la div
		document.getElementById("wrap").style.opacity=1;
	}
	
	document.getElementById("explication").addEventListener("mouseover", afficherExplications, false);
	document.getElementById("explication").addEventListener("mouseout", cacherExplications, false);
</script>
</body>

<script src="canvas.js"></script>

</html>