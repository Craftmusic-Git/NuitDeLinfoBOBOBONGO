
<?php
//#1 Procédure FromNameToPerson :
    include_once "bdd.php";

    function FromNameToPerson($Name){
        $bdd = connect();
        if($bdd != null){
            echo"test";
            $res = $bdd->query("CALL FromNameToPerson('$Name',0)");

            if(!$res) {
                echo"Error with the call of : FromNameToPerson ".$bdd->error();
                echo'GOB';
            }
            return $res;
        }
        return null;
    }

   //#2 Procédure FromPrenomToPerson :
function FromPrenomToPerson($prenom){
    $bdd = connect();
    if($bdd != null){
        if( !$res = $bdd->query("CALL FromPrenomToPerson('$prenom')")) {
            printf("Error with the call of : FromPrenomToPerson");
            return $res;
        }
    }
    return null;
}

//#3 Procédure FromIDToPerson :
include_once "bdd.php";

function FromIDToPerson($id){
    $bdd = connect();
    if($bdd != null){
        if( !$res = $bdd->query("CALL FromIDToPerson('$id')")) {
            printf("Error with the call of : FromIDToPerson");
            return $res;
        }
    }
    return null;
}

//#5 Procédure FromIDToEvent
function FromIDToEvent($id){
    $bdd = connect();
    if($bdd != null){
        if( !$res = $bdd->query("CALL FromIDToEvent('$id')")) {
            printf("Error with the call of : FromIDToEvent");
            return $res;
        }
    }
    return null;
}



?>