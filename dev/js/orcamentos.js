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
	console.log($("#html-form").serialize())
	  $.post("script/submit.php", $("#orcamentoform").serialize(), function(data){
            //do stuff here...
            console.log('after processa o php aqui...',data);
        });
}

console.log("...orcamentos Object added to engine#####")