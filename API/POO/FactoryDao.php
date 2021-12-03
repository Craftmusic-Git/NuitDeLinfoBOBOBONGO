<?php

include_once "Factory.php";

$kind = $_POST['kind'];
$factory = new Factory();

switch ($kind){
    case 0: pushArticleBdd(); break;
    case 1: pushPersonneBdd(); break;
    case 2: pushBoatBdd(); break;
    case 3: pushEventBdd(); break;
    default: break;
}

function pushArticleBdd(){
    global $factory;
    $title = $_POST['title'];
    $content = $_POST['contentArticle'];
    $factory->setArticle($title, date("m.d.y"), $content);
}

function pushPersonneBdd(){
    global $factory;
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $factory->setPersonne($nom, $prenom, null);
}

function pushBoatBdd(){
    global $factory;
    $nom = $_POST['nom'];
    $factory->setBateaux($nom, null, null);
}

function pushEventBdd(){
    global $factory;
    $nom = $_POST['nom'];
    $factory->setEvenement($nom, null, null);
}