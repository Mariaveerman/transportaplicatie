<?php

function getKlantnaam($db_conn, $klant_id) {
    $qry = "SELECT coalesce(naam, 'onbekend') as naam, coalesce(cp, '') as cp FROM klant
            WHERE id={$klant_id};";
    $result = mysqli_query($db_conn, $qry);
    $arrayKlant =mysqli_fetch_assoc($result);
    return $arrayKlant;
}
function deleteKlant($db_conn, $klantId) {

}

function deleteOpdracht($db_conn, $opdrachtId) {
    $query = "DELETE FROM opdracht WHERE id={$opdrachtId}";

    try {
        $result = mysqli_query($db_conn, $query);
        return true;
    } catch (mysqli_sql_exception $e) {
        error_log($e->getMessage());
        die('Helaas, verwijderen opdracht is niet gelukt!');
        return false;
    }


}