// Variale globale res, pas top mais à laisser pour cause d’optimisation mémoire
// Si besoin, adaptez les paramètres à la résolution de votre webcam
var res = new Array( 640*480 );
// Convolue l’image par le noyeau de convolution kernel.
// kernel est supposé être de dimension 3 par 3.
// La somme de ses 9 coefficients doit (en général) être égal à 1
ImageData.prototype.convolve = function( kernel ){

	var w = this.width * 4;
	var h = this.height * 4;
	var a11 = 0 , a12 = 4 , a13 = 8;
	var a21 = w , a22 = w+4 , a23 = w+8;
	var a31 = 2*w, a32 = 2*w+4, a33 = 2*w+8;


	for ( var k=w+4; k<this.data.length-w-4; k+=4){
		res[ k ] = kernel[0] * this.data[ a11++ ] + kernel[1] * this.data[ a12++ ] + kernel[2] * this.data[ a13++ ];
		res[ k+1 ] = kernel[0] * this.data[ a11++ ] + kernel[1] * this.data[ a12++ ] + kernel[2] * this.data[ a13++ ];
		res[ k+2 ] = kernel[0] * this.data[ a11++ ] + kernel[1] * this.data[ a12++ ] + kernel[2] * this.data[ a13++ ];
		a11++; a12++; a13++;
	}

	for ( var k=w+4; k<this.data.length-w-4; k+=4){
		res[ k ] += kernel[3] * this.data[ a21++ ] + kernel[4] * this.data[ a22++ ] + kernel[5] * this.data[ a23++ ];
		res[ k+1 ] += kernel[3] * this.data[ a21++ ] + kernel[4] * this.data[ a22++ ] + kernel[5] * this.data[ a23++ ];
		res[ k+2 ] += kernel[3] * this.data[ a21++ ] + kernel[4] * this.data[ a22++ ] + kernel[5] * this.data[ a23++ ];
		a21++; a22++; a23++;
	}

	for ( var k=w+4; k<this.data.length-w-4; k+=4){
		this.data[ k ] = Math.abs( res[k] + kernel[6] * this.data[ a31++ ] + kernel[7] * this.data[ a32++ ] + kernel[8] * this.data[ a33++ ]);
		this.data[k+1] = Math.abs( res[ k+1 ] + kernel[6] * this.data[ a31++ ] + kernel[7] * this.data[ a32++ ] + kernel[8] * this.data[ a33++ ]);
		this.data[k+2] = Math.abs( res[ k+2 ] + kernel[6] * this.data[ a31++ ] + kernel[7] * this.data[ a32++ ] + kernel[8] * this.data[ a33++ ]);
		a31++; a32++; a33++;
	}
}

ImageData.prototype.filter_luminosity = function(pourcentage){
	for(var i=0; i<this.data.length; i+=4){
		this.data[i] = this.data[i]*(1 + pourcentage);
		if (this.data[i] > 255)
			this.data[i] = 255;
		if (this.data[i] < 0)
			this.data[i] = 0;
		this.data[i+1] = this.data[i+1]*(1 + pourcentage);
		if (this.data[i] > 255)
			this.data[i] = 255;
		if (this.data[i] < 0)
			this.data[i] = 0;
		this.data[i+2] = this.data[i+2]*(1 + pourcentage);
		if (this.data[i] > 255)
			this.data[i] = 255;
		if (this.data[i] < 0)
			this.data[i] = 0;
	}
}

ImageData.prototype.filter_contraste = function(pourcentage){
	for(var i=0; i<this.data.length; i+=4){
		this.data[i] = this.data[i] + pourcentage*(this.data[i]-127);
		if (this.data[i] > 255)
			this.data[i] = 255;
		if (this.data[i] < 0)
			this.data[i] = 0;
		this.data[i+1] = this.data[i+1] + pourcentage*(this.data[i+1]-127);
		if (this.data[i] > 255)
			this.data[i] = 255;
		if (this.data[i] < 0)
			this.data[i] = 0;
		this.data[i+2] = this.data[i+2] + pourcentage*(this.data[i+2]-127);
		if (this.data[i] > 255)
			this.data[i] = 255;
		if (this.data[i] < 0)
			this.data[i] = 0;
	}

}

ImageData.prototype.filter_gray = function(){
	for(var i=0; i<this.data.length; i+=4){
		var gray = (0.299*this.data[i] + 0.587*this.data[i+1] + 0.114*this.data[i+2]);
		this.data[i] = gray;
		this.data[i+1] = gray;
		this.data[i+2] = gray;
	}
}

ImageData.prototype.filter_sepia = function(){
	for(var i=0; i<this.data.length; i+=4){
		this.data[i] = this.data[i]*0.393 + this.data[i+1]*0.769 + this.data[i+2]*0.189;
		this.data[i+1] = this.data[i]*0.349 + this.data[i+1]*0.686 + this.data[i+2]*0.168;
		this.data[i+2] = this.data[i]*0.272 + this.data[i+1]*0.534 + this.data[i+2]*0.131;
	}
}

ImageData.prototype.filter_negative = function(){
	for(var i=0; i<this.data.length; i+=4){
		this.data[i] = 255 - this.data[i];
		this.data[i+1] = 255 - this.data[i+1];
		this.data[i+2] = 255 - this.data[i+2];
	}
}

ImageData.prototype.filter_3D=function(){
	var data = this.data;
	var x = 15;
	var y = 0;

	for(var i=0; i<this.data.length; i+=4){
		this.data[i] = data[i+((this.width*y*4)+(x*4))];	
		//this.data[i+2]=data[i+2+((this.width*y*4)+(-x*4))];
	}
}

ImageData.prototype.filter_minmax = function(){
	for(var i=0; i<this.data.length; i+=4){
		if (this.data[i] < 128)
			this.data[i] = 0;
		if (this.data[i] >= 128)
			this.data[i] = 255;

		if (this.data[i+1] < 128)
			this.data[i+1] = 0;
		if (this.data[i+1] >= 128)
			this.data[i+1] = 255;

		if (this.data[i+2] < 128)
			this.data[i+2] = 0;
		if (this.data[i+2] >= 128)
			this.data[i+2] = 255;
	}
}

ImageData.prototype.filter_seuil = function(){
	this.filter_gray();
	this.filter_minmax();
}

ImageData.prototype.filter_opacity = function(){
	var alpha = Math.round(Math.random()*64)+128;

	for(var i=0; i<this.data.length; i+=4){
		this.data[i+3] = alpha;
	}
}

ImageData.prototype.filter_noise = function(){
	for(var i=0; i<this.data.length; i+=4){
		var valeur = Math.random();
		if (valeur <= 0.1){
			this.data[i] = Math.random()*255;
			this.data[i+1] = Math.random()*255;
			this.data[i+2] = Math.random()*255;
		}
	}
}

ImageData.prototype.filter_redChannel = function(){
	for(var i=0; i<this.data.length; i+=4){
		this.data[i+1] = 0;
		this.data[i+2] = 0;
	}
}

ImageData.prototype.filter_greenChannel = function(){
	for(var i=0; i<this.data.length; i+=4){
		this.data[i] = 0;
		this.data[i+2] = 0;
	}
}

ImageData.prototype.filter_blueChannel = function(){
	for(var i=0; i<this.data.length; i+=4){
		this.data[i] = 0;
		this.data[i+1] = 0;
	}
}

ImageData.prototype.filter_RGB2BRG = function(){
	for(var i=0; i<this.data.length; i+=4){
		var pixelR = this.data[i];
		var pixelG = this.data[i+1];
		var pixelB = this.data[i+2];
		this.data[i] = pixelB;
		this.data[i+1] = pixelR;
		this.data[i+2] = pixelG;
	}
}

ImageData.prototype.filter_RGB2GBR = function(){
	for(var i=0; i<this.data.length; i+=4){
		var pixelR = this.data[i];
		var pixelG = this.data[i+1];
		var pixelB = this.data[i+2];
		this.data[i] = pixelG;
		this.data[i+1] = pixelB;
		this.data[i+2] = pixelR;
	}
}

