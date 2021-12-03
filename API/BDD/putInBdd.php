<?php

include_once('connect.php');

function putArticle($name, $description){
    $con = connect();

    if(!$res = $con->query("CALL CreateArticle('$name', '$description')")){
        echo 'error during article creation';
    }

    $con->close();
}

function putPersonne($nom, $prenom){
    $con = connect();

    if(!$res = $con->query("CALL CreatePerson('$nom', '$prenom')")){
        echo 'error during person creation';
    }

    $con->close();
}

function putBoat($nom, $type){
    $con = connect();
    if($type == null)
        $type = "";
    if(!$res = $con->query("CALL CreateBateau('$nom', '$type')")){
        echo 'error during boat creation';
    }

    $con->close();
}

function putEvent($nom, $description){
    $con = connect();
    if($description == null)
        $description = "";
    $date = date("m.d.y");
    if(!$res = $con->query("CALL CreateEvenement('$nom', '$date', '$description')")){
        echo 'error during event creation';
    }

    $con->close();
}