function ajaxSend(valueToSend, target, goal){
    var httpRequest = new XMLHttpRequest();
    httpRequest.open('POST', target, true);
    httpRequest.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    httpRequest.onreadystatechange = function(){
        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
            var response = httpRequest.responseText;
            reactAjax(goal, response);
        }
    };

    httpRequest.send(valueToSend);
}

function reactAjax(index, response){
    switch(index){
        case 0: // Get template page
            newContentPage(response);
            break;
        case 2:
            listAllPage(response);
            break;
        case 3:
            addResearchToDom(response);
            console.log(response);
            break;
        default:
            break;
    }
}

function reloadPage(){
    window.location = document.location.href;
}