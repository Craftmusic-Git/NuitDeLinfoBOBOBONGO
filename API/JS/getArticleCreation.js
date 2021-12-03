
function getInputs(){
    var titleArticle = document.getElementsByClassName('input-title')[0].value;
    var personneAssociate = document.getElementsByClassName('persons')[0].value;
    var eventAssociate = document.getElementsByClassName('event')[0].value;
    var boatAssociate = document.getElementsByClassName('boat')[0].value;
    var contentArticle = document.getElementsByClassName('article')[0].value;
    var valueToSend;

    console.log("Value title article: " + titleArticle);
    console.log("Value personneAssociate: " + personneAssociate);
    console.log("Article : " + contentArticle);

    if(titleArticle !== '' && contentArticle !== '') {
        valueToSend = "kind=0&title=" + titleArticle + "&contentArticle=" + contentArticle;
        ajaxSend(valueToSend, '../POO/FactoryDao.php', 1);
    }

    if(personneAssociate !== ''){
        personneAssociate = personneAssociate.split(',');
        for(var i=0; i<personneAssociate.length; i++){
            var names = personneAssociate[i].split(' ');
            valueToSend = "kind=1&nom=" + names[0] + "&prenom=" + names[1];
            ajaxSend(valueToSend, '../POO/FactoryDao.php', 1);
        }
    }

    if(boatAssociate !== ''){
        boatAssociate = boatAssociate.split(',');
        for(var i=0; i<boatAssociate.length; i++){
            valueToSend = "kind=2&nom=" + boatAssociate[i];
            ajaxSend(valueToSend, '../POO/FactoryDao.php', 1);
        }
    }

    if(eventAssociate !== ''){
        eventAssociate = eventAssociate.split(',');
        for(var i=0; i<eventAssociate.length; i++){
            valueToSend = "kind=3&nom=" + eventAssociate[i];
            ajaxSend(valueToSend, '../POO/FactoryDao.php', 1);
        }
    }

}