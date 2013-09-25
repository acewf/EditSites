var parcerias = new Object();
parcerias.active = false;
parcerias.init = function(){
	parcerias.desapperScreen(0);
}
parcerias.apperScreen = function(){
	parcerias.active = true;

	TweenLite.to($('.mapa'), 3, {rotationX:0,opacity:1});
	TweenLite.to($('.marcador'), .5, {opacity:1});
	TweenLite.to($('.marcador'), .5, {css:{margin:"0px 0px 0px 0px;"}});

}
parcerias.desapperScreen = function(actualAlpha){
	if (actualAlpha<.5) {
		if (actualAlpha>1) {actualAlpha=1};
		var rotationX = 60;//90-(90*actualAlpha);
		actualAlpha = 0;
		parcerias.active = false;

		TweenLite.to($('.mapa'), .5, {rotationX:rotationX,opacity:actualAlpha});
		TweenLite.to($('.marcador'), .5, {opacity:0});
		TweenLite.to($('.marcador'), .5, {css:{margin:"-15px 0px 0px 0px;"}});
	};
}