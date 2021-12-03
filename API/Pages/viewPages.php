<?php

sendContentToDom();

function sendContentToDom(){
    $contentDOM = '<div id="template-page">';
    $contentDOM .= getArticleData(); // boucle sur tous les articles
    $contentDOM .= '</div>';

    echo $contentDOM;
}

function getArticleData(){
    return '
      <div class="div-article clickable">
        <div class="article-icon">
        </div>
        <div class="article-data">
            <h3>
            </h3>
            <p>
            </p>
        </div>
      </div>  
    ';
}