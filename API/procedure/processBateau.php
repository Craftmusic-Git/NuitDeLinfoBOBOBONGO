<?php
// #100 Procédure FromNomToBateau :

    include_once "bdd.php";

    function FrontNomToBateau($name){
        $bdd = connect();

        if ($bdd != 0) {

            if ( !$res = $bdd->querry("Call forName('$name')")) {
                printf("Error with the call of : FromNameToBateau");
                return $res;
                }

        }
        return null;

    }

        //#101 Procédure FromTypeToBateau :
include_once "bdd.php";

function FrontTypeToBateau($type){
    $bdd = connect();

    if ($bdd != 0) {

        if ( !$res = $bdd->querry("Call forType('$type')")) {
            printf("Error with the call of : FromTypeToBateau");
            return $res;
        }

    }
    return null;

}

//#102 Procédure FromIdToBateau :
include_once "bdd.php";

function FrontIDToBateau($id){
    $bdd = connect();

    if ($bdd != 0) {

        if ( !$res = $bdd->querry("Call forName('$id')")) {
            printf("Error with the call of : FromIdToBateau");
            return $res;
        }

    }
    return null;

}

//#106 Procédure EventIDonBat :
include_once "bdd.php";

function EventIDonBat($id){
    $bdd = connect();

    if ($bdd != 0) {

        if ( !$res = $bdd->querry("Call forName('$id')")) {
            printf("Error with the call of : EventIDonBat");
            return $res;
        }

    }
    return null;

}


//#108 Procédure persIDonBat :
include_once "bdd.php";

function persIDonBat($id){
    $bdd = connect();

    if ($bdd != 0) {

        if ( !$res = $bdd->querry("Call forName('$id')")) {
            printf("Error with the call of : persIDonBat");
            return $res;
        }

    }
    return null;

}
//#114 Procédure ArticleIDonBat :
include_once "bdd.php";

function ArticleIDonBat($id){
    $bdd = connect();

    if ($bdd != 0) {

        if ( !$res = $bdd->querry("Call forName('$id')")) {
            printf("Error with the call of : ArticleIDonBat");
            return $res;
        }

    }
    return null;

}
