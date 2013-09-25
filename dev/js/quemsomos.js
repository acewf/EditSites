var quemsomos = new Object();
quemsomos.active = false;
quemsomos.init = function(){
	quemsomos.desapperScreen(0);
}
quemsomos.apperScreen = function(){
	quemsomos.active = true;
	console.log("ENTROU NO QUEM SOMOS")

}
quemsomos.desapperScreen = function(actualAlpha){
	quemsomos.active = false;
}