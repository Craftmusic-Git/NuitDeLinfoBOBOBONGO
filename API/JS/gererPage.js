function gererPage() {
	div = document.getElementById('editor');
	div.innerHTML = "";
	let divButtons = document.createElement("div");
	let viewButton = document.createElement("button");
	let createButton = document.createElement("button");
	divButtons.id = 'divButtons';
	viewButton.id = 'viewButton';
	createButton.id = 'createButton';
	viewButton.className = 'clickable';
	createButton.className = 'clickable';
	viewButton.onclick = viewPages;
	createButton.onclick = createPage;
	viewButton.innerHTML = "Voir les pages";
	createButton.innerHTML = "Créer une page";
	divButtons.appendChild(viewButton);
	divButtons.appendChild(createButton);
	div.appendChild(divButtons);

}

function viewPages() {
	div = document.getElementById('editor');
	div.innerHTML = "";
}
function createPage() {
	divButtons = document.getElementById('divButtons');
	divButtons.innerHTML = "";
	ajaxSend("", "createPage.php", 0);
	div = document.getElementById('editor');
	let validButton = document.createElement("button");
	let cancelButton = document.createElement("button");
	validButton.className = 'clickable checkButton';
	cancelButton.className = 'clickable crossButton';
	validButton.onclick = viewPages;
	cancelButton.onclick = createPage;
	div.appendChild(validButton);
	div.appendChild(cancelButton);
	
}

function newContentPage(contentDOM){
	div = document.getElementById('divButtons');
	div.innerHTML = contentDOM;
}