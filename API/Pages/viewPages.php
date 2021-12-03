<?php

include_once '../BDD/getOutBdd.php';

sendContentToDom();

function sendContentToDom(){
    $contentDOM = '';

    $res = getAllArticles();
    while($article = $res->fetch_array()) {
        $contentDOM .= getArticleData($article); // boucle sur tous les articles
    }

    echo $contentDOM;
}

function getArticleData($article){
    $presentation = explode('.', $article['content']);

    return '
      <div class="div-article clickable">
        <div class="article-icon">
        </div>
        <div class="article-data">
            <h3>' . $article['titre'] . '</h3>
            <p>'. $presentation[0] . '</p>
        </div>
      </div>  
    ';
}