var welcomeScreen = new Object();
welcomeScreen.init = function(){
	welcomeScreen.desapperScreen(0);
}
welcomeScreen.apperScreen = function(){
}
welcomeScreen.desapperScreen = function(actualAlpha){
}
welcomeScreen.fetchTime = function()
	{
		var today=new Date();

		var h=today.getUTCHours();
		var m=today.getUTCMinutes();

		h=h+1;
		
		// add a zero in front of numbers<10
		
		if (h>12){h=h-12};
		var timeLisboa = new Object();
		timeLisboa.hours = h;
		var timeNY = new Object();
		timeNY.hours = h-5;
		if (timeNY.hours<0){timeNY.hours=12+timeNY.hours};
		var timeTOKYO = new Object();
		timeTOKYO.hours = h+8;
		if (timeTOKYO.hours>12){timeTOKYO.hours=timeTOKYO.hours-12};

		timeTOKYO.minutes = m;
		timeNY.minutes = m;
		timeLisboa.minutes = m;
		
		return {lisboa:timeLisboa,ny:timeNY,tokyo:timeTOKYO}
	}

welcomeScreen.updateTimeClock = function(){
	var valuesReturn = welcomeScreen.fetchTime();

	welcomeScreen.updateTimeClockElement($("#newyork #hora"),$("#newyork #minutos"),valuesReturn.ny);

	welcomeScreen.updateTimeClockElement($("#lisboa #hora"),$("#lisboa #minutos"),valuesReturn.lisboa);

	welcomeScreen.updateTimeClockElement($("#tokyo #hora"),$("#tokyo #minutos"),valuesReturn.tokyo);
}
welcomeScreen.updateTimeClockElement = function(elementHour,elementMin,timeobjec){
	var hoursRotation = 180+(360*timeobjec.hours)/12;
	var MinutRotation = 180+(360*timeobjec.minutes)/60;
	hoursRotation += (30*timeobjec.minutes)/60;
	TweenLite.to(elementHour, 2, {rotation:hoursRotation});
	TweenLite.to(elementMin, 2, {rotation:MinutRotation});
}

