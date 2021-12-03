function ajaxSend(valueToSend, target, goal){
    var hourChoice = true;
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
        case 0:
            console.log("test");
            break;
        default:
            break;
    }
}

function reloadPage(){
    window.location = document.location.href;
}