<?php

include_once 'Bateaux.php';
include_once 'Personne.php';
include_once 'Evenement.php';
include_once 'Article.php';
include_once 'EventBat.php';
include_once 'PersEvent.php';
include_once 'BatPers.php';

class Factory
{
    function setPersonne($nom, $prenom, $object){
        $personne = new Personne();
        $personne->nom = $nom;
        $personne->prenom = $prenom;
        $personne->object = $object;

        return $personne;
    }

    function setBateaux($nom, $type, $object){
        $bateaux = new Bateaux();
        $bateaux->nom = $nom;
        $bateaux->type = $type;
        $bateaux->object = $object;

        return $bateaux;
    }

    function setEvenement($nom, $description, $object){
        $event = new Evenement();
        $event->nom = $nom;
        $event->description = $description;
        $event->object = $object;

        return $event;
    }

    function setArticle($titre, $date, $contenu){
        $article = new Article();
        $article->contenu = $contenu;
        $article->date = $date;
        $article->titre = $titre;

        return $article;
    }
}