<?php
    function connect(){ //3306
        $bdd = mysqli_connect("cocobongo.hopto.org","cocobongo","cacabongo","cocobongo","3306");

        if(!$bdd){
            echo"ERROR";
            die("Connection failed: " . $bdd->connect_error);
        }
        return $bdd;
    }

    function SQLclose($dataBase){
        mysqli_close($dataBase);
    }
?>