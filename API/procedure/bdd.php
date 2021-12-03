<?php
    function connect(){
        $rep = mysqli_connect("cocobongo.hopto.org.3306","cocobongo","cacabongo");

        return $rep;
    }

    function SQLclose($dataBase){
        mysqli_close($dataBase);
    }
?>