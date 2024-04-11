<?php
//STAP 1 - Initialisatie
define('HOST', 'localhost');
define('DATABASE', 'transportbedrijf');
define('USER', 'root');
define('PASSWORD','Wachtwoord');


//gebruik geen root!!!
//STAP 2 | connection db
try {
    $dbconn=mysqli_connect(HOST, USER, PASSWORD, DATABASE);
}
catch (exception $e) {
    $dbconn=$e;
    echo $dbconn;
}

function fnCloseDb($conn){
    if (!$conn==false)
    {
        mysqli_close($conn)
        or die('Sluiten MySQL-db niet gelukt...'); 
        }
}

?>