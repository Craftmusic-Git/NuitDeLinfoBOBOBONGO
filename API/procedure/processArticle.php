<?php
// #103 Procédure FromTitreToArticle :
include_once "bdd.php";

function FrontTitreToArticle($titre){
    $bdd = connect();

    if ($bdd != 0) {

        if ( !$res = $bdd->querry("Call forName('$titre')")) {
            printf("Error with the call of : FromTitreToArticle");
            return $res;
        }

    }
    return null;

}
//#104 Procédure FromDateToArticle :

include_once "bdd.php";

function FrontDateToArticle($Date){
    $bdd = connect();

    if ($bdd != 0) {

        if ( !$res = $bdd->querry("Call forName('$Date')")) {
            printf("Error with the call of : FromDateToArticle");
            return $res;
        }

    }
    return null;

}

//#105 Procédure FromContenuToArticle :
include_once "bdd.php";

function FrontContenuToArticle($contenu){
    $bdd = connect();

    if ($bdd != 0) {

        if ( !$res = $bdd->querry("Call forName('$contenu')")) {
            printf("Error with the call of : FromContenuToArticle");
            return $res;
        }

    }
    return null;

}

//#110 Procédure EventIDOnArticle :
include_once "bdd.php";

function EventIDOnArticle($id){
    $bdd = connect();

if ($bdd != 0) {

    if ( !$res = $bdd->querry("Call forName('$id')")) {
        printf("Error with the call of : EventIDOnArticle");
        return $res;
    }

}
return null;

}
//#112 Procédure PersIDOnArticle :
include_once "bdd.php";

function PersIDOnArticle($id){
    $bdd = connect();

    if ($bdd != 0) {

        if ( !$res = $bdd->querry("Call forName('$id')")) {
            printf("Error with the call of : PersIDOnArticle");
            return $res;
        }

    }
    return null;

}

//#113 Procédure BatIDOnArticle :
include_once "bdd.php";

function BatIDOnArticle($id){
    $bdd = connect();

    if ($bdd != 0) {

        if ( !$res = $bdd->querry("Call forName('$id')")) {
            printf("Error with the call of : BatIDOnArticle");
            return $res;
        }

    }
    return null;

}



//#111 Procédure ArticleIDOnevent :
include_once "bdd.php";

function ArticleIDOnevent($id){
    $bdd = connect();

    if ($bdd != 0) {

        if ( !$res = $bdd->querry("Call forName('$id')")) {
            printf("Error with the call of : ArticleIDOnevent");
            return $res;
        }

    }
    return null;

}

//#115 Procédure ArticleIDOnPers :
include_once "bdd.php";

function ArticleIDOnevent($id){
    $bdd = connect();

    if ($bdd != 0) {

        if ( !$res = $bdd->querry("Call forName('$id')")) {
            printf("Error with the call of : ArticleIDOnevent");
            return $res;
        }

    }
    return null;

}

//#107 Procédure BatIDonEvent :
include_once "bdd.php";

function BatIDonEvent($id){
    $bdd = connect();

    if ($bdd != 0) {

        if ( !$res = $bdd->querry("Call forName('$id')")) {
            printf("Error with the call of : BatIDonEvent");
            return $res;
        }

    }
    return null;

}

//#109 Procédure BatIDOnPers :
include_once "bdd.php";

function BatIDOnPers($id){
    $bdd = connect();

    if ($bdd != 0) {

        if ( !$res = $bdd->querry("Call forName('$id')")) {
            printf("Error with the call of : BatIDOnPers");
            return $res;
        }

    }
    return null;

}
