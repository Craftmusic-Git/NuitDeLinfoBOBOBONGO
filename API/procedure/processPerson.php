
<?php
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
?>