<?php
// #100 Procédure FromNomToBateau :

    include_once "bdd.php";

    function FrontNomToBateau($name){
        $bdd = connect();

        if ($bdd != 0) {

            if ( !$res = $bdd->querry("Call FromNameToBateau('$name')")) {
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

        if ( !$res = $bdd->querry("Call FromTypeToBateau('$type')")) {
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

        if ( !$res = $bdd->querry("Call FromIdToBateau('$id')")) {
            printf("Error with the call of : FromIdToBateau");
            return $res;
        }

    }
    return null;

}

//#106 Procédure EvenementtIDonBateau :
include_once "bdd.php";

function EvenementtIDonBateau($id){
    $bdd = connect();

    if ($bdd != 0) {

        if ( !$res = $bdd->querry("Call EvenementtIDonBateau('$id')")) {
            printf("Error with the call of : EvenementtIDonBateau");
            return $res;
        }

    }
    return null;

}


//#108 Procédure PersonIDonBateau :
include_once "bdd.php";

function PersonIDonBateau($id){
    $bdd = connect();

    if ($bdd != 0) {

        if ( !$res = $bdd->querry("Call PersonIDonBateau('$id')")) {
            printf("Error with the call of : PersonIDonBateau");
            return $res;
        }

    }
    return null;

}
//#114 Procédure ArticleIDonBateau :
include_once "bdd.php";

function ArticleIDonBateau($id){
    $bdd = connect();

    if ($bdd != 0) {

        if ( !$res = $bdd->querry("Call ArticleIDonBateau('$id')")) {
            printf("Error with the call of : ArticleIDonBateau");
            return $res;
        }

    }
    return null;

}
