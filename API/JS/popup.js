function goPopup(){
	//console.log(arguments);
	var load = document.getElementById('popup'); 
	var supButton = document.getElementById('popup-validate');
	funToUse = arguments[0];
	//console.log(funToUse);
	args = Array.from(arguments);
	args.shift();
	supButton.addEventListener('click', function(){
		stopPopup();
		funToUse.apply(this, args);
		//window[funToUse].apply(this, args);
	});
	if (load.className != "show") {
		setTimeout(function(){
			load.style.display = 'block';
		},0); // timed to occur immediately
		load.className = "show";
		
	}
}


function stopPopup(){
	var load = document.getElementById('popup');
	load.className = "hide";
	setTimeout(function(){
		load.style.display = 'none';
		load.style.zIndex = "-1";
	},700); // timed to match animation-duration

}
function goPopup2(){
	//console.log(arguments);
	var load = document.getElementById('popup2'); 
	var supButton = document.getElementById('popup-validate2');
	funToUse = arguments[0];
	//console.log(funToUse);
	args = Array.from(arguments);
	args.shift();
	supButton.addEventListener('click', function(){
		stopPopup();
		funToUse.apply(this, args);
		//window[funToUse].apply(this, args);
	});
	if (load.className != "show") {
		setTimeout(function(){
			load.style.display = 'block';
		},0); // timed to occur immediately
		load.className = "show";
		
	}
}


function stopPopup2(){
	var load = document.getElementById('popup2');
	load.className = "hide";
	setTimeout(function(){
		load.style.display = 'none';
		load.style.zIndex = "-1";
	},700); // timed to match animation-duration

}


// echo "<script type=\"text/javascript\" >stop()</script>";
// gestion du this qui marche pas