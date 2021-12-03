<?php

sendContentToDom();

function sendContentToDom(){
    $contentDOM = '<div id="template-page">';
    $contentDOM .= getTitleArticle();
    $contentDOM .= '<div id="associate-contents">';
    $contentDOM .= getPersonneAssociate();
    $contentDOM .= getEventAssociate();
    $contentDOM .= getBoatAssociate();
    $contentDOM .= '</div>';
    $contentDOM .= getArticle();
    $contentDOM .= '</div>';

    echo $contentDOM;
}

function getTitleArticle(){
    return '
      <div id="title-article">
        <input class="input-title clickable" name="titleArticle" maxlength="254" required placeholder="Titre de l\'article">
      </div>  
    ';
}

function getPersonneAssociate(){
    return '
        <div id="person-associate">
           <label>Entrez les personnes associées à l\'article: </label>
           <input class="persons clickable" name="personAssociate" maxlength="1024" placeholder="Les noms et prénoms des personnes, séparées par des virgules">
        </div>
    ';
}

function getEventAssociate(){
    return '
        <div id="event-associate">
           <label>Entrez les évenements associés à l\'article: </label>
           <input class="event clickable" name="eventAssociate" maxlength="1024" placeholder="Les évenements, séparés par des virgules">
        </div>
    ';
}

function getBoatAssociate(){
    return '
        <div id="boat-associate">
            <label>Entrez les bateaux associés à l\'article: </label>
            <input class="boat clickable" name="boatAssociate" maxlength="1024" placeholder="Les noms de bateaux, séparés par des virgules">
        </div>
    ';
}

function getArticle(){
    return '
        <div id="article-input">
            <textarea class="article clickable" name="newArticle" required rows="8" cols="40">C\'est ici que vous rentrez le contenu de votre article
            </textarea>
        </div>
    ';
}