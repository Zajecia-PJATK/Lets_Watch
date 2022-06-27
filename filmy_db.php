<?php

function connection(){
    $baza=new mysqli("localhost", "root", "", "movies");
    if($baza->connect_error){
        die("Błąd Połączenia: " . $baza->connect_error);
    }
    return $baza;
}

?>
