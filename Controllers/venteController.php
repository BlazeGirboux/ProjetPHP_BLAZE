<?php 

function BestCard($pdo)
{
    try {
         $query = 'SELECT * FROM vente ORDER BY venteVue DESC LIMIT 1;';
         $selectVenteVue = $pdo->prepare($query);
         $selectVenteVue->execute([ ]);
         $venteVue = $selectVenteVue->fetch();
         return $venteVue;
    
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message); }
}