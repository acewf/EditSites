var engine = new Object();
var screenAreas = new Array();
screenAreas.push({class:'.WelcomeScreen',hash:'WelcomeScreen'});
screenAreas.push({class:'.QuemSomos',hash:'QuemSomos'});
screenAreas.push({class:'.oquefazemos',hash:'QueFazemos'});
screenAreas.push({class:'.parcerias',hash:'Parcerias'});
screenAreas.push({class:'.orcamentos',hash:'Orcamentos'});



engine.hashchange =  function (argument) {
	// body...
	console.log(argument)
	$(document.body).scrollTop($('#anchorName2').offset().top);
}

engine.onLoad = function(){
	engine.parcerias = parcerias;
	parcerias.desapperScreen();
	engine.welcomeScreen = welcomeScreen;
	console.log('engine init');
	welcomeScreen.updateTimeClock();
	setInterval(function(){welcomeScreen.updateTimeClock()},60*1000);

	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash,
	    $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 900, 'swing', function () {
	        window.location.hash = target;
	    });
	});

	

  window.onscroll = function (event) {
        var perc = window.pageYOffset/ ($(document.body).height()-window.innerHeight);
		console.log($(document.body).height(),"##")
		var limitValue = $(document.body).height()/4;//400;
		var difValue = limitValue-100;

		for (var i = screenAreas.length - 1; i >= 0; i--) {
			var objTest = $(screenAreas[i].class)
			var localValue = $(screenAreas[i].class).position().top-window.pageYOffset; 
			localValue = Math.sqrt(localValue*localValue)
			//console.log(localValue,screenAreas[i]);
			var valueArea = screenAreas[i].class.substring(1,screenAreas[i].class.length);
			if (localValue>difValue) {
				
				var parsevalue = (localValue-difValue);
				if (parsevalue>limitValue) {parsevalue=limitValue};
				var actualAlpha = 1-(parsevalue/limitValue);
				if ((engine[valueArea]!=undefined) && (actualAlpha<1)){
					if (engine[valueArea].active) {
						engine[valueArea].desapperScreen(actualAlpha);
					};
				}
				$(screenAreas[i].class).css({ 'opacity' : actualAlpha });
			}  else {
				window.location.hash = "#"+screenAreas[i].hash;
				$(screenAreas[i].class).css({ 'opacity' : 1 });
				if (engine[valueArea]!=undefined){
					if (!engine[valueArea].active) {
						engine[valueArea].apperScreen();
					};
				}
				//parcerias
				//if (screenAreas[i]) {};
			}
			
		};

		
        //console.log(rolled,window.pageYOffset,document.body.clientHeight,perc);
    }

	// for mouse scrolling in Firefox
    var elem = document;
    if (elem.addEventListener) {    // all browsers except IE before version 9
            // Internet Explorer, Opera, Google Chrome and Safari
        elem.addEventListener ("mousewheel", window.onscroll, false);
            // Firefox
        elem.addEventListener ("DOMMouseScroll", window.onscroll, false);
    }
    else {
        if (elem.attachEvent) { // IE before version 9
            elem.attachEvent ("onmousewheel", window.onscroll);
        }
    }

    $(window).bind( 'hashchange',function(e) {
    	event.preventDefault();

    	console.log(location.hash) 
    });
}




    