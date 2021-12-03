<?php

include_once "Factory.php";
include_once "../BDD/putInBdd.php";

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
    $article = $factory->setArticle($title, date("m.d.y"), $content);
    putArticle($article->titre, $article->contenu);
}

function pushPersonneBdd(){
    global $factory;
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $personne = $factory->setPersonne($nom, $prenom, null);
    putPersonne($personne->nom, $personne->prenom);
}

function pushBoatBdd(){
    global $factory;
    $nom = $_POST['nom'];
    $boat = $factory->setBateaux($nom, null, null);
    putBoat($boat->nom, $boat->type);
}

function pushEventBdd(){
    global $factory;
    $nom = $_POST['nom'];
    $event = $factory->setEvenement($nom, null, null);
    putEvent($event->nom, $event->description);
}