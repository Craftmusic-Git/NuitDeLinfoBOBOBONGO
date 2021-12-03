
<?php
    include_once "bdd.php";

    function FromNameToPerson($Name){
        $bdd = connect();
        if($bdd != null){
            if( !$res = $bdd->query("CALL FromNameToPerson('$Name')")) {
                printf("Error with the call of : FromNameToPerson");
                return $res;
            }
        }
        return null;
    }
?>