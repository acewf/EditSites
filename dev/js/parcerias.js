var parcerias = new Object();
parcerias.active = false;
parcerias.apperScreen = function(){
	parcerias.active = true;

	TweenLite.to($('.mapa'), 3, {rotationX:0,opacity:1});
	TweenLite.to($('.marcador'), 2, {opacity:1});

}
parcerias.desapperScreen = function(actualAlpha){
	if (actualAlpha>1) {actualAlpha=1};
	var rotationX = 90-(90*actualAlpha);
	if (rotationX==0) {parcerias.active = false;};

	TweenLite.to($('.mapa'), .3, {rotationX:rotationX,opacity:actualAlpha});
	TweenLite.to($('.marcador'), .2, {opacity:actualAlpha});
}