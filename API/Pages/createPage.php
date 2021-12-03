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
        <input class="input-title" name="titleArticle" maxlength="254" required placeholder="Titre de l\'article">
      </div>  
    ';
}

function getPersonneAssociate(){
    return '
        <div id="person-associate">
           <label>Entrez les personnes associées à l\'article: </label>
           <input class="persons" name="personAssociate" maxlength="1024" placeholder="Les noms des personnes">
        </div>
    ';
}

function getEventAssociate(){
    return '
        <div id="event-associate">
           <label>Entrez les évenements associés à l\'article: </label>
           <input class="event" name="eventAssociate" maxlength="1024" placeholder="Les évenements">
        </div>
    ';
}

function getBoatAssociate(){
    return '
        <div id="boat-associate">
            <label>Entrez les bateaux associés à l\'article: </label>
            <input class="boat" name="boatAssociate" maxlength="1024" placeholder="Les noms de bateaux">
        </div>
    ';
}

function getArticle(){
    return '
        <div id="article-input">
            <input class="article" name="newArticle" required placeholder="C\'est ici que vous rentrez le contenu de votre article">
        </div>
    ';
}