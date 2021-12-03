<?php
// # Procédure FromNomToEvenement :
include_once "bdd.php";

function FrontTitreToArticle($name){
    $bdd = connect();

    if ($bdd != 0) {

        if ( !$res = $bdd->querry("Call FrontTitreToArticle('$name')")) {
            printf("Error with the call of : FrontTitreToArticle");
            return $res;
        }

    }
    return null;

}
//#104 Procédure FromDescriptionToEvenement

include_once "bdd.php";

function FromDescriptionToEvenement($Desc){
    $bdd = connect();

    if ($bdd != 0) {

        if ( !$res = $bdd->querry("Call FromDescriptionToEvenement('$Desc')")) {
            printf("Error with the call of : FromDescriptionToEvenement");
            return $res;
        }

    }
    return null;

}



//#110 Procédure FromIdToEvenement
include_once "bdd.php";

function FromIdToEvenement($id){
    $bdd = connect();

if ($bdd != 0) {

    if ( !$res = $bdd->querry("Call FromIdToEvenement('$id')")) {
        printf("Error with the call of : FromIdToEvenement");
        return $res;
    }

}
return null;

}




//#112 Procédure PersonIDOnEvenement :
include_once "bdd.php";

function PersIDOnEvenement($id){
    $bdd = connect();

    if ($bdd != 0) {

        if ( !$res = $bdd->querry("Call PersonIDOnEvenement('$id')")) {
            printf("Error with the call of : PersonIDOnEvenement");
            return $res;
        }

    }
    return null;

}

//#113 Procédure BateauIDOnEvenement :
include_once "bdd.php";

function BateauIDOnEvenement($id){
    $bdd = connect();

    if ($bdd != 0) {

        if ( !$res = $bdd->querry("Call BateauIDOnEvenement('$id')")) {
            printf("Error with the call of : BateauIDOnEvenement");
            return $res;
        }

    }
    return null;

}



//#111 Procédure ArticleIDOnevent :
/*include_once "bdd.php";

function ArticleIDOnevent($id){
    $bdd = connect();

    if ($bdd != 0) {

        if ( !$res = $bdd->querry("Call forName('$id')")) {
            printf("Error with the call of : ArticleIDOnevent");
            return $res;
        }

    }
    return null;

}*/

//#115 Procédure EvenementIDOnPerson :
include_once "bdd.php";

function EvenementIDOnPerson($id){
    $bdd = connect();

    if ($bdd != 0) {

        if ( !$res = $bdd->querry("Call EvenementIDOnPers('$id')")) {
            printf("Error with the call of : EvenementIDOnPerson");
            return $res;
        }

    }
    return null;

}

//#107 Procédure BatIDonEvent :
/*include_once "bdd.php";

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
*/
//#109 Procédure EvenementIDOnBateau:
include_once "bdd.php";

function EvenementIDOnBateau($id){
    $bdd = connect();

    if ($bdd != 0) {

        if ( !$res = $bdd->querry("Call EvenementIDOnBateau('$id')")) {
            printf("Error with the call of : EvenementIDOnBateau");
            return $res;
        }

    }
    return null;

}
