
window.addEventListener("pageshow", showTooltip);


function showTooltip() {	

	if (matchMedia('only screen and (max-width: 767px)').matches) {
  		var start = Date.now();     // saves the time of the begining
		
		var delay = setTimeout(function() {
		  document.getElementById("tooltip").style.display = "block";
		}, 3000);      //becomes visible after 3 seconds after page was showed
							
		var intTooltip = setInterval(function(){
			
			var timePassed = Date.now() - start; // calculates how much time has passed
		    
		    var a = document.getElementById('tooltip').style.opacity;

		    if (timePassed > 8300) clearInterval(intTooltip); //hides the #tooltip 

		    if (a == 0.65) { 
		    	document.getElementById('tooltip').style.opacity = 0; 
		    } else {
		    	document.getElementById('tooltip').style.opacity = 0.65;
		    }
		    
		}, 700); 

		var display_none = setTimeout(function() {

		  document.getElementById("tooltip").style.display = "none";

		}, 8700);	

		//    var a = document.getElementById('tooltip').style.opacity || 1;
		//    document.getElementById('tooltip').style.opacity = ((parseInt(a))?0:1);
	  	//}, 650);   		
	}

}

//window.addEventListener("resize", notShowTooltip);
//function notShowTooltip() {
//	document.getElementById("tooltip").style.display = "none";
//}


	

	