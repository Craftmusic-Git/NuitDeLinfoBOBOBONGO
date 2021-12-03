<?php
include_once "API/procedure/bdd.php";
//include_once "API/procedure/processArticle.php";
//include_once "API/procedure/processPerson.php";
//include_once "API/procedure/processBateau.php";
//include_once "API/procedure/processCreation.php";
//include_once "API/procedure/processEvenement.php";

echo "Hello World\n";

$bdd = connect();

try {
    $rep = $bdd->query("SELECT * FROM personne");
}
catch(Exception $e)
{
    echo"Erreur : ".$e->getMessage();
}

$rep = FromNameToPerson('ANTOINE');
echo'GO';/*
foreach($rep as $data){
    echo $data['first_name']." ".$data['last_name']." ";
}*/

while ($row = $rep->fetch_assoc()){
    echo $row['first_name'] . " - " . + $row['last_name'];
}

//$rep = $bdd->query("INSERT INTO personne (first_name,last_name) VALUES ('MARC','ANTOINE')");

mysqli_close($bdd);

?>