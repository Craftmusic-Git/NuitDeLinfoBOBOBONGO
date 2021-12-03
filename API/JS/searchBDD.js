window.onload = function(){
	researchLaunch();
}

function searchBDD() {
<<<<<<< HEAD
	div = document.GetElementById('search');
	div.style.top = 5;
}

function researchLaunch(){
	document.addEventListener('keyup', (e)=>{
		if(e.code === 'Enter') {
			var searchVal = document.getElementById("search").children[0].value;
			var valueToSend = "kind=1&content=".searchVal;
			ajaxSend(valueToSend, "API/Pages/viewPages.php", 3);
		}
	});
}

function addResearchToDom(domContent){
	var div = document.getElementById('divResults');
	div.innerHTML = domContent;
=======
	div = document.getElementById('search');
	div.style.top = "5%";
	results = document.getElementById('divResults');
	results.style.opacity = 1;
>>>>>>> 88a7df91cdf360d851eafd7c05d59cc64709f622
}