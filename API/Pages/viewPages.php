<?php

include_once '../BDD/getOutBdd.php';

sendContentToDom();

function sendContentToDom(){
    $contentDOM = '';

    $kindOfResearch = $_POST['kind'];

    if($kindOfResearch == 0)
        $res = getAllArticles();
    else if($kindOfResearch == 1)
        $res = searchArticles($_POST['content']);

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