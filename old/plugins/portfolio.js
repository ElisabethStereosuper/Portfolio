				var liappli = document.getElementById("liappli");
				var liweb = document.getElementById("liweb");
				var liprint = document.getElementById("liprint");
				var livideo = document.getElementById("livideo");
				var liphoto = document.getElementById("liphoto");
				var lianim = document.getElementById("lianim");

				var appli = document.getElementById("appli");
				var web = document.getElementById("web");
				var print = document.getElementById("print");
				var video = document.getElementById("video");
				var photo = document.getElementById("photo");
				var anim = document.getElementById("anim");

				liappli.className = "blue";
				web.style.display = "none";
				print.style.display = "none";
				video.style.display = "none";
				photo.style.display = "none";
				anim.style.display = "none";

				var appliAppear = function(){
					web.style.display = "none";
					liweb.className = "none";

					print.style.display = "none";
					liprint.className = "none";

					video.style.display = "none";
					livideo.className = "none";

					photo.style.display = "none";
					liphoto.className = "none";

					anim.style.display = "none";
					lianim.className = "none";

					appli.style.display = "block";
					liappli.className = "blue";
				}

				var webAppear = function(){
					appli.style.display = "none";
					liappli.className = "none";

					print.style.display = "none";
					liprint.className = "none";

					video.style.display = "none";
					livideo.className = "none";

					photo.style.display = "none";
					liphoto.className = "none";

					anim.style.display = "none";
					lianim.className = "none";

					web.style.display = "block";
					liweb.className = "blue";
				}

				var printAppear = function(){
					web.style.display = "none";
					liweb.className = "none";

					appli.style.display = "none";
					liappli.className = "none";

					video.style.display = "none";
					livideo.className = "none";

					photo.style.display = "none";
					liphoto.className = "none";

					anim.style.display = "none";
					lianim.className = "none";

					print.style.display = "block";
					liprint.className = "blue";
				}

				var videoAppear = function(){
					web.style.display = "none";
					liweb.className = "none";

					appli.style.display = "none";
					liappli.className = "none";

					print.style.display = "none";
					liprint.className = "none";

					photo.style.display = "none";
					liphoto.className = "none";

					anim.style.display = "none";
					lianim.className = "none";

					video.style.display = "block";
					livideo.className = "blue";
				}

				var photoAppear = function(){
					web.style.display = "none";
					liweb.className = "none";

					appli.style.display = "none";
					liappli.className = "none";

					print.style.display = "none";
					liprint.className = "none";

					video.style.display = "none";
					livideo.className = "none";

					anim.style.display = "none";
					lianim.className = "none";

					photo.style.display = "block";
					liphoto.className = "blue";
				}

				var animAppear = function(){
					web.style.display = "none";
					liweb.className = "none";

					appli.style.display = "none";
					liappli.className = "none";

					print.style.display = "none";
					liprint.className = "none";

					video.style.display = "none";
					livideo.className = "none";

					photo.style.display = "none";
					liphoto.className = "none";

					anim.style.display = "block";
					lianim.className = "blue";
				}

				liappli.addEventListener("click", appliAppear, false);
				liweb.addEventListener("click", webAppear, false);
				liprint.addEventListener("click", printAppear, false);
				livideo.addEventListener("click", videoAppear, false);
				liphoto.addEventListener("click", photoAppear, false);
				lianim.addEventListener("click", animAppear, false);