var engine = new Object();
var screenAreas = new Array();
screenAreas.push('.WelcomeScreen')
screenAreas.push('.QuemSomos')
engine.hashchange =  function (argument) {
	// body...
	console.log(argument)
	$(document.body).scrollTop($('#anchorName2').offset().top);
}

engine.onLoad = function(){
	console.log('engine init');
	welcomeScreen.updateTimeClock()
	setInterval(function(){welcomeScreen.updateTimeClock()},60*1000);

	

  window.onscroll = function (event) {
        var rolled = 0;
        /*
        if ('wheelDelta' in event) {
            rolled = event.wheelDelta;
        }
        else {  // Firefox
                // The measurement units of the detail and wheelDelta properties are different.
            rolled = -40 * event.detail;
        }
        
		*/
		var perc = window.pageYOffset/ ($(document.body).height()-window.innerHeight);

		for (var i = screenAreas.length - 1; i >= 0; i--) {
			var localValue = $(screenAreas[i]).position().top-window.pageYOffset; 
			localValue = Math.sqrt(localValue*localValue)
			//console.log(localValue,screenAreas[i]);
			if (localValue>300) {
				var limitValue = 400;
				var parsevalue = (localValue-300);
				if (parsevalue>400) {parsevalue=400};
				console.log(parsevalue,screenAreas[i]);
				var actualAlpha = 1-(parsevalue/limitValue);
				//if(actualAlpha<0) actualAlpha=0; 
				
				console.log(actualAlpha,screenAreas[i]);
				$(screenAreas[i]).css({ 'opacity' : actualAlpha });
			}  else {
				$(screenAreas[i]).css({ 'opacity' : 1 });
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

    $(window).bind( 'hashchange',function(e) {console.log(e) });
}




    