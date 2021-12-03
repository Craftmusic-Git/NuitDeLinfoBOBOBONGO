<?php

include_once 'connect.php';

function getAllArticles(){
    $con = connect();

    if(!$res = $con->query("CALL getAllArticles()")){
        echo 'Error during all articles getting : ' . $con->error();
    }

    return $res;
}
