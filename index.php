<?php
include_once "API/procedure/bdd.php";

error_reporting(0);

echo "Hello World\n";


try {
    $bdd = connect();
    $rep = $bdd->query("SELECT * FROM personne");
}
catch(Exception $e)
{
    echo"Erreur : ".$e->getMessage();
}

foreach($rep as $data){
    echo $data['first_name']." ".$data['last_name']." ";
}

//$rep = $bdd->query("INSERT INTO personne (first_name,last_name) VALUES ('MARC','ANTOINE')");

mysqli_close($bdd);

?>