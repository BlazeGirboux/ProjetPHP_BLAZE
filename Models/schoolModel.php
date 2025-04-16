<?php

function selectAllVente($pdo)
{
    try {
        $query = 'select * from vente ORDER BY venteVue ';
        $selectplane = $pdo->prepare($query);
        $selectplane->execute();
        $planes = $selectplane->fetchAll();
        return $planes;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }

}