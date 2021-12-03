<?php
include_once "API/procedure/bdd.php";
<<<<<<< HEAD
//include_once "API/procedure/processArticle.php";
//include_once "API/procedure/processPerson.php";
//include_once "API/procedure/processBateau.php";
//include_once "API/procedure/processCreation.php";
//include_once "API/procedure/processEvenement.php";

echo "Hello World\n";

$bdd = connect();

try {
=======

error_reporting(0);

echo "Hello World\n";


try {
    $bdd = connect();
>>>>>>> 32cd7f6266f7522a6355c3bcec373ee4e5e3f402
    $rep = $bdd->query("SELECT * FROM personne");
}
catch(Exception $e)
{
    echo"Erreur : ".$e->getMessage();
}

<<<<<<< HEAD
$rep = FromNameToPerson('ANTOINE');
echo'GO';/*
foreach($rep as $data){
    echo $data['first_name']." ".$data['last_name']." ";
}*/

while ($row = $rep->fetch_assoc()){
    echo $row['first_name'] . " - " . + $row['last_name'];
=======
foreach($rep as $data){
    echo $data['first_name']." ".$data['last_name']." ";
>>>>>>> 32cd7f6266f7522a6355c3bcec373ee4e5e3f402
}

//$rep = $bdd->query("INSERT INTO personne (first_name,last_name) VALUES ('MARC','ANTOINE')");

mysqli_close($bdd);

?>