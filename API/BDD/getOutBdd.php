<?php

include_once 'connect.php';

function getAllArticles(){
    $con = connect();

    if(!$res = $con->query("CALL getAllArticles()")){
        echo 'Error during all articles getting : ' . $con->error();
    }

    return $res;
}

function fromContenuToArticle($content){
    $con = connect();

    if(!$res = $con->query("CALL FromContenuToArticle('$content')")){
        echo 'Error during research of article by content' . $con->error();
    }

    return $res;
}

function fromTitreToArticle($title){
    $con = connect();

    if(!$res = $con->query("CALL FromTitreToArticle('$title', 1)")){
        echo 'Error during research of article by title' . $con->error();
    }

    return $res;
}