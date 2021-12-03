<?php
    function connect(){ //3306
        $bdd = mysqli_connect("cocobongo.hopto.org","cocobongo","cacabongo","cocobongo","3306");
        if(!$bdd){
            echo"ERROR";
        }
        return $bdd;
    }

    function SQLclose($dataBase){
        mysqli_close($dataBase);
    }
?>