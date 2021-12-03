<?php

#200 Procédure CreatePerson:
include_once "bdd.php";

function CreatePerson($name,$prenom,$id){
    $bdd = connect();

    if ($bdd != 0) {

        if ( !$res = $bdd->querry("Call CreatePerson('$name,$prenom,$id')")) {
            printf("Error with the call of : CreatePerson");
            return $res;
        }

    }
    return null;

}



#201 Procédure CreateEvenement:
#//Entry : String nom , String Description , unsigned int ID
//Return : Evenement evenement[]

function CreateEvenement($name,$description,$id){
    $bdd = connect();

    if ($bdd != 0) {

        if ( !$res = $bdd->querry("Call CreateEvenement('$name,$description,$id')")) {
            printf("Error with the call of : CreateEvenement");
            return $res;
        }

    }
    return null;

}


#202 Procédure CreateBateau:
//Entry : String nom , String type , unsigned int ID
//Return : Bateau bateaux[]

    function CreateBateau($name,$type,$id){
    $bdd = connect();

    if ($bdd != 0) {

        if ( !$res = $bdd->querry("Call CreateBateau('$name,$type,$id')")) {
            printf("Error with the call of : CreateBateau");
            return $res;
        }

    }
    return null;

}


#203 Procédure CreateArticle:
//Entry : String titre , int date ,  String Contenu , unsigned int ID
//Return : Article articles[]

function CreateArticle($titre,$date,$contenu,$id){
    $bdd = connect();

    if ($bdd != 0) {

        if ( !$res = $bdd->querry("Call CreateArticle('$titre,$date,$contenu,$id')")) {
            printf("Error with the call of : CreateArticle");
            return $res;
        }

    }
    return null;

}