window.onload = function()
{
	//On récupère les différents éléments du html nécessaires au code
	var canvas = document.getElementById('canvas');
        var src1 = document.getElementById('src1');
        var photo = document.getElementById("img");
	var btn = document.getElementById("btn");
	var ctx = canvas.getContext("2d");
	var ctx_src1 = src1.getContext("2d");

	//On définit la couleur à null pour le choix de l'utilisateur, en attendant le déclenchement de la fonction "choix"
	window.couleur=new Object();
	window.couleur.r=null;
	window.couleur.g=null;
	window.couleur.b=null;

	//Cette fonction contient toutes les fonctions permettant le dessin du logo
	var generateur = function(){
                        var totalLoaded = 0;
		//On définit un tableau d'images qui contient les photos représentant SRC, dans lequel on choisit aléatoirement deux images
			var images = new Array("img/1.png", "img/2.png", "img/3.png", "img/4.png", "img/5.png", "img/6.png", "img/7.jpg");

			var img1 = new Image();
			var img1_rand = Math.floor(Math.random()*7);
			img1.src = images[img1_rand];

			var img2 = new Image();
			var img2_rand = Math.floor(Math.random()*7);
			while(img1_rand ==img2_rand){
				img2_rand = Math.floor(Math.random()*7);	
			}
			img2.src = images[img2_rand];

		//On récupère la photo envoyée par l'utilisateur, dont la source est donnée dans le HTML par une variable PHP
			var img3 = new Image();
			img3.src = photo.src;

		//On récupère le bouton permettant d'envoyer le choix de l'utilisateur concernant son profil
			var btn_choix = document.getElementById("btn_choix");

		//On définit les différentes positions où placer nos triangles dans des tableaux
			var positionsXTriangle = new Array("200", "250", "350", "100", "200", "300", "150", "350", "450");
			var positionsYTriangle = new Array("100", "200", "200", "300", "300", "300", "400", "400", "400");
			var positionsXReverseTriangle = new Array("250", "200", "300", "150", "350", "200", "300", "400");
			var positionsYReverseTriangle = new Array("0", "100", "100", "200", "200", "300", "300", "300");

		//Cette fonction permet de dessiner un simple triangle noir qui définira le fond de notre logo
		var grandTriangle = function(){
			ctx.beginPath();//On démarre un nouveau tracé
			ctx.moveTo(0, 500);//On se déplace au coin inférieur gauche
			ctx.lineTo(250, 0);
			ctx.lineTo(500, 500);
			ctx.lineTo(0, 500);
			ctx.fill();//On remplit le triangle de noir (couleur par défaut)
			ctx.closePath();//On termine le tracé
		}

		//Cette fonction permet de choisir aléatoirement les photos qui seront découpées et appelle les fonctions qui 
		//permettent de sélectionner les petits triangles découpés dans les photos et de les dessiner sur le logo; c'est dans cette
		//fontion que les coordonnées sont données à  ces triangles
		var petitsTriangles = function(){
			/*POSITIONS: (250, 0) / (200, 100), (300, 100) / (150, 200), (250, 200), (350, 200) 
			/ (100, 300), (200, 300), (300, 300), (400, 300) / (50, 400), (150, 400), (250, 400), (350, 400), (450, 400)*/
			
			//On définit un tableau avec les différentes images sélectionnées aléatoirement plus haut
			var images = new Array(img1.src, img2.src, img3.src);
			var img_rand = Math.floor(Math.random()*3);
			for(var i=0; i<positionsXTriangle.length; i++){
				var img = new Image();
				img_rand = Math.floor(Math.random()*3);
				img.src = images[img_rand];
				drawTriangle(ctx_src1, ctx , positionsXTriangle[i] , positionsYTriangle[i], src1, img);
				drawReverseTriangle(ctx_src1, ctx , positionsXReverseTriangle[i] , positionsYReverseTriangle[i], src1, img);
			}
		}

		//Cette fonction appelle les fonctions permettant de dessiner les triangles colorés correspondant au profil de l'utilisateur,
		//et permet de les placer
		var filterTriangles = function(){

			drawFilterTriangle(ctx_src1, ctx , positionsXTriangle[0], positionsYTriangle[0], src1);
			drawFilterTriangle(ctx_src1, ctx , positionsXTriangle[8], positionsYTriangle[8], src1);
			drawFilterTriangle(ctx_src1, ctx , positionsXTriangle[2], positionsYTriangle[2], src1);
			drawFilterTriangle(ctx_src1, ctx , positionsXTriangle[5], positionsYTriangle[5], src1);
			
			drawReverseFilterTriangle(ctx_src1, ctx , positionsXReverseTriangle[3], positionsYReverseTriangle[3], src1);
			drawReverseFilterTriangle(ctx_src1, ctx , positionsXReverseTriangle[5], positionsYReverseTriangle[5], src1);
		}

		//Cette fonction permet de découper les photographies en petits triangles à l'endroit
		var drawTriangle = function(ctx_dessin, context, destx , desty, canvas, img){
			ctx_dessin.clearRect(0, 0, canvas.width, canvas.height);

			var width = 100;
			var height = 100;
			var x = 0;
			var y = x + height;
		
			ctx_dessin.save();
			ctx_dessin.beginPath();
			ctx_dessin.moveTo(x, y);
			ctx_dessin.lineTo(x+width/2, x);
			ctx_dessin.lineTo(y, y);
			ctx_dessin.lineTo(x, y);
			ctx_dessin.stroke();
			ctx_dessin.closePath();
			ctx_dessin.clip();
			ctx_dessin.drawImage(img, -1*Math.floor(Math.random()*300), -1*Math.floor(Math.random()*300), 500, 500);
			ctx_dessin.restore();

			context.drawImage(canvas, 0-x+destx-width/2, 0-y+height+desty, 500, 500);
		}

		//Cette fonction permet de découper les photographies en petits triangles à l'envers
		var drawReverseTriangle = function(ctx_dessin, context, destx , desty, canvas, img){
			ctx_dessin.clearRect(0, 0, canvas.width, canvas.height);

			var width = 100;
			var height = 100;
			var x = 0;
			var y = x + height;
		
			ctx_dessin.save();
			ctx_dessin.beginPath();
			ctx_dessin.moveTo(x, y);
			ctx_dessin.lineTo(y, y);
			ctx_dessin.lineTo(x+width/2, y+height);
			ctx_dessin.lineTo(x, y);
			ctx_dessin.stroke();
			ctx_dessin.closePath();
			ctx_dessin.clip();
			ctx_dessin.drawImage(img, -1*Math.floor(Math.random()*300), -1*Math.floor(Math.random()*300), 500, 500);
			ctx_dessin.restore();

			context.drawImage(canvas, 0-x+destx-width/2, 0-y+height+desty, 500, 500);
		}

		//Cette fonction permet de dessiner les petits triangles colorés à l'endroit
		var drawFilterTriangle = function(ctx_dessin, context, destx , desty, canvas){
			ctx_dessin.clearRect(0, 0, canvas.width, canvas.height);

			var width = 100;
			var height = 100;
			var x = 0;
			var y = x + height;
		
			ctx_dessin.save();
			ctx_dessin.beginPath();
			ctx_dessin.moveTo(x, y);
			ctx_dessin.lineTo(x+width/2, x);
			ctx_dessin.lineTo(y, y);
			ctx_dessin.lineTo(x, y);
			ctx_dessin.fillStyle = "rgba("+window.couleur.r+","+window.couleur.g+","+window.couleur.b+", 0.47)";
			ctx_dessin.fill();
			ctx_dessin.closePath();
			ctx_dessin.clip();
			ctx_dessin.restore();

			context.drawImage(canvas, 0-x+destx-width/2, 0-y+height+desty);

		}

		//Cette fonction permet de dessiner les petits triangles colorés à l'envers
		var drawReverseFilterTriangle = function(ctx_dessin, context, destx , desty, canvas){
			ctx_dessin.clearRect(0, 0, canvas.width, canvas.height);

			var width = 100;
			var height = 100;
			var x = 0;
			var y = x + height;
		
			ctx_dessin.save();
			ctx_dessin.beginPath();
			ctx_dessin.moveTo(x, y);
			ctx_dessin.lineTo(y, y);
			ctx_dessin.lineTo(x+width/2, y+height);
			ctx_dessin.lineTo(x, y);
			ctx_dessin.fillStyle = "rgba("+window.couleur.r+","+window.couleur.g+","+window.couleur.b+", 0.47)";
			ctx_dessin.fill();
			ctx_dessin.clip();
			ctx_dessin.closePath();
			ctx_dessin.restore();

			context.drawImage(canvas, 0-x+destx-width/2, 0-y+height+desty);
		}
                
                //Cette fonction permet de ne d�clencher la g�n�ration du logo que lorsque les imaes sont charg�es
		var loaded = function(){
				totalLoaded++;
				if(totalLoaded == 2){
					//Ici on appelle les fonctions permettant de dessiner les divers triangles
					grandTriangle();
	  				petitsTriangles();
	  				filterTriangles();
				}
		}

		img1.onLoad = loaded();
		img2.onLoad = loaded();
  	}

  	//On ajoute un écouteur au bouton permettant de déclencher la fonction générateur
	btn.addEventListener("click", generateur, false);

	//Cette fonction permet de définir la couleur à utiliser pour les petits triangles colorés selon le choix de l'utilisateur
	var choix = function(){
				var choix = document.getElementsByName("profil");
				for(var i=0; i<choix.length; i++){
				if (choix[i].checked){
					if (choix[i].value == "blue"){
						window.couleur.r = 0;
						window.couleur.g = 159;
						window.couleur.b = 227;
					}else if (choix[i].value == "yellow"){
						window.couleur.r = 255;
						window.couleur.g = 237;
						window.couleur.b = 0;
					}else if (choix[i].value == "red"){
						window.couleur.r = 230;
						window.couleur.g = 0;
						window.couleur.b = 126;
					}
				}
			}
		}
	
	//On ajoute un écouteur au bouton permettant de choisir la couleur
	document.getElementById("btn_choix").addEventListener("click", choix, false);
}		