<?php

function connect(){
    $DATABASE_HOST = 'cocobongo.hopto.org:3306'; //51.75.202.48:3306 au cas ou need ipv4
    $DATABASE_USER = 'cocobongo';
    $DATABASE_PASS = 'cacabongo';
    $DATABASE_NAME = 'cocobongo';

    $con = new mysqli($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

    if ($con->connect_errno) {
        exit('Failed to connect to MySQL: ' . $con->connect_error);
    }

    return $con;
}

