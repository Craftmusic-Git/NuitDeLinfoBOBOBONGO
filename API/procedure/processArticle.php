<?php
// #103 Procédure FromTitreToArticle :
include_once "bdd.php";

function FrontTitreToArticle($titre){
    $bdd = connect();

    if ($bdd != 0) {

        if ( !$res = $bdd->querry("Call FromTitreToArticle('$titre')")) {
            printf("Error with the call of : FromTitreToArticle");
            return $res;
        }

    }
    return null;

}
//#104 Procédure FromDateToArticle :


function FrontDateToArticle($Date){
    $bdd = connect();

    if ($bdd != 0) {

        if ( !$res = $bdd->querry("Call FromDateToArticle('$Date')")) {
            printf("Error with the call of : FromDateToArticle");
            return $res;
        }

    }
    return null;

}

//#105 Procédure FromContenuToArticle :;

function FrontContenuToArticle($contenu){
    $bdd = connect();

    if ($bdd != 0) {

        if ( !$res = $bdd->querry("Call FromContenuToArticle('$contenu')")) {
            printf("Error with the call of : FromContenuToArticle");
            return $res;
        }

    }
    return null;

}

//#110 Procédure EvenementIDOnArticle :

function EvenementIDOnArticle($id){
    $bdd = connect();

if ($bdd != 0) {

    if ( !$res = $bdd->querry("Call EvenementIDOnArticle('$id')")) {
        printf("Error with the call of : EvenementIDOnArticle");
        return $res;
    }

}
return null;

}
//#112 Procédure PersonIDOnArticle :

function PersonIDOnArticle($id){
    $bdd = connect();

    if ($bdd != 0) {

        if ( !$res = $bdd->querry("Call PersonIDOnArticle('$id')")) {
            printf("Error with the call of : PersonIDOnArticle");
            return $res;
        }

    }
    return null;

}

//#113 Procédure BateauIDOnArticle :

function BateauIDOnArticle($id){
    $bdd = connect();

    if ($bdd != 0) {

        if ( !$res = $bdd->querry("Call BateauIDOnArticle('$id')")) {
            printf("Error with the call of : BateauIDOnArticlee");
            return $res;
        }

    }
    return null;

}



//#111 Procédure ArticleIDOnEvenement :
function ArticleIDOnEvenement($id){
    $bdd = connect();

    if ($bdd != 0) {

        if ( !$res = $bdd->querry("Call ArticleIDOnEvenement('$id')")) {
            printf("Error with the call of : ArticleIDOnEvenement");
            return $res;
        }

    }
    return null;

}

//#115 Procédure ArticleIDOnPerson :
function ArticleIDOnPerson($id){
    $bdd = connect();

    if ($bdd != 0) {

        if ( !$res = $bdd->querry("Call ArticleIDOnPerson('$id')")) {
            printf("Error with the call of : ArticleIDOnPerson");
            return $res;
        }

    }
    return null;

}

//#107 Procédure BateauIDonEvent :

function BateauIDonEvent($id){
    $bdd = connect();

    if ($bdd != 0) {

        if ( !$res = $bdd->querry("Call BateauIDonEvent('$id')")) {
            printf("Error with the call of : BateauIDonEvent");
            return $res;
        }

    }
    return null;

}

//#109 Procédure BateauIDOnPerson :

function BateauIDOnPerson($id){
    $bdd = connect();

    if ($bdd != 0) {

        if ( !$res = $bdd->querry("Call BateauIDOnPerson('$id')")) {
            printf("Error with the call of : BateauIDOnPerson");
            return $res;
        }

    }
    return null;

}
