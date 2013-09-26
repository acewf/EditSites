var orcamentos = new Object();
orcamentos.active = false;
orcamentos.init = function(){
	orcamentos.desapperScreen(0);
}
orcamentos.apperScreen = function(){
	orcamentos.active = true;

}
orcamentos.desapperScreen = function(actualAlpha){
	console.log('desapperScreen o php aqui');
}

orcamentos.submitform = function(){
	console.log('processa o php aqui');
	 $('body').append( '<div class="overlay" onclick="orcamentos.closeFeedback()">');
	  $.post("http://gibberish.pixelkiller.net/script/submit.php", $("#orcamentoform").serialize(), function(data){
            //do stuff here...
            console.log('after processa o php aqui...',data);
            $('body').append( '<div class="message">A Sua Mensagem foi enviada com sucesso.<br>em breve ira ser contatado.</div>' );
        });
}
orcamentos.closeFeedback = function(){
	$( ".overlay" ).remove();
	$( ".message" ).remove();
}
console.log("...orcamentos Object added to engine#####")