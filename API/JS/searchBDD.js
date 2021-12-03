window.onload = function(){
	researchLaunch();
}

function searchBDD() {
	div = document.getElementById('search');
	div.style.top = "5%";
	results = document.getElementById('divResults');
	results.style.opacity = 1;
}

function researchLaunch(){
	document.addEventListener('keyup', (e)=>{
		if(e.code === 'Enter') {
			console.log("oui");
			var searchVal = document.getElementById("search").children[0].value;
			var valueToSend = "kind=1&content=" + searchVal;
			ajaxSend(valueToSend, "./API/Pages/viewPages.php", 3);
			searchBDD();
		}
	});
}

function addResearchToDom(domContent){
	var div = document.getElementById('divResults');
	div.innerHTML = domContent;
}