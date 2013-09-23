var parcerias = new Object();
parcerias.active = false;
parcerias.apperScreen = function(){
	console.log("active apperScreen parcerias");
	parcerias.active = true;

	TweenLite.to($('.mapa'), 1, {rotationX:0,opacity:1});
	TweenLite.to($('.marcador'), 1, {opacity:1});

}
parcerias.desapperScreen = function(actualAlpha){
	console.log("active desapperScreen parcerias");
	

	if (actualAlpha>1) {actualAlpha=1};

	var rotationX = 90-(90*actualAlpha);

	console.log(actualAlpha,'rotationX:'+rotationX)

	if (rotationX==0) {parcerias.active = false;};

	TweenLite.to($('.mapa'), .1, {rotationX:rotationX,opacity:actualAlpha});
	TweenLite.to($('.marcador'), .1, {opacity:actualAlpha});
}


