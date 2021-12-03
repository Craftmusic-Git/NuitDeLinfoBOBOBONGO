window.onload = function(){
	researchLaunch(0);
}

function searchBDD() {
	div = document.getElementById('search');
	div.style.top = "5%";
	results = document.getElementById('divResults');
	results.style.opacity = 1;
	results.style.height = (window.innerHeight - 200) + "px";
}

function researchLaunch(vr){
	document.addEventListener('keyup', (e)=>{
		if(e.code === 'Enter' || vr==1) {
			var searchVal = document.getElementById("search").children[0].value;
			var valueToSend = "kind=1&content=" + searchVal;
			ajaxSend(valueToSend, "./API/Pages/viewPages.php", 3);
			if(vr===0)
				searchBDD();
		}
	});
}

function research(){
	researchLaunch(1);
	searchBDD();
}

function addResearchToDom(domContent){
	var div = document.getElementById('divResults');
	div.innerHTML = domContent;
}