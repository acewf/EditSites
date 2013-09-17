var engine = new Object();
var screenAreas = new Array();
screenAreas.push('.WelcomeScreen')
screenAreas.push('.QuemSomos')
screenAreas.push('.oquefazemos')
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
		console.log($(document.body).height(),"##")
		var limitValue = $(document.body).height()/2;//400;
		var difValue = limitValue-100;

		for (var i = screenAreas.length - 1; i >= 0; i--) {
			var localValue = $(screenAreas[i]).position().top-window.pageYOffset; 
			localValue = Math.sqrt(localValue*localValue)
			//console.log(localValue,screenAreas[i]);
			if (localValue>difValue) {
				
				var parsevalue = (localValue-difValue);
				if (parsevalue>limitValue) {parsevalue=limitValue};
				var actualAlpha = 1-(parsevalue/limitValue);
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




    